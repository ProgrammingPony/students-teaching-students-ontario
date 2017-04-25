<?php
//REMOVE FOLDER EXTENTION AFTER PUTTING ONLINE
require($_SERVER['DOCUMENT_ROOT'] . '/sts_07-16-2014' . '/template/template1_variables.php');
require($template_root . 'template1_head.phtml');
?>
<meta name="description" content="Presentations, handouts, quizzes and much more resources for a variety of programs! Students Teaching Students resources.">
<meta name="keywords" content="sts, students teaching students, resources, quiz, presentation, links, handouts">
<TITLE>STS - Resources</TITLE>
<STYLE>
#container {
	margin:20px 0;
}

#fKeywords {
	
}

LABEL {
	margin:20px 0;
	width:20%;
	float:left;
	clear:left;
	display:inline-block;
	font-weight:800;
	padding:10px 0;
}

INPUT {
	border-radius:5px;
	border-style:none;
	margin:20px 0;
	display:inline-block;
	width:70%;
	float:left;
	clear:right;
	padding:10px 20px;
}

INPUT:focus {
	outline:0;
}
</STYLE>
<?php require($template_root . 'template1_bodystart.phtml'); ?>

<script>
	//Fetch resource information from XML file
	var request; var response;
	
	if (window.XMLHttpRequest) { //Code for IE7+, Firefox, Chrome, Opera, Safari
		request = new XMLHttpRequest();
	}
	else { //Code for IE6 & 5
		request = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	request.onreadystatechange=function(){
		if (request.readyState==4 && request.status==200) {
			response = request.responseXML;			
		}
	}

	request.open("GET", "resources.xml", false); 
	request.send();
	
	//Function to update resource displayed so that it applies filter
	function update_results(filter_string) {
		var container = document.getElementById("container");

		//Remove all items from current display
		while (container.firstChild) {
			container.removeChild(container.firstChild);
		}

		for (var i = 0; i < response.getElementsByTagName("name").length; i++) {
			var link = response.getElementsByTagName("link")[i].childNodes[0].nodeValue;
			var contributor = response.getElementsByTagName("contributor")[i].childNodes[0].nodeValue;
			var name = response.getElementsByTagName("name")[i].childNodes[0].nodeValue;	
			var dateAdded = response.getElementsByTagName("dateAdded")[i].childNodes[0].nodeValue;
			var description = response.getElementsByTagName("description")[i].childNodes[0].nodeValue;
			var preview_link = response.getElementsByTagName("preview")[i].childNodes[0].nodeValue;
			
			if (filter_string.length > 0) {	
				if  ((name.toUpperCase().indexOf(filter_string.toUpperCase())) > -1) {
					add_resource(name, link, contributor, dateAdded, description, preview_link);
				}			
			} else {
				add_resource(name, link, contributor, dateAdded, description, preview_link);
			}
		}
	}
	
	function add_resource (name, link, contributor, dateAdded, description, preview_link) {
		var resource = document.createElement("div");
		
			//Left column to have all the text and link
			var left_col = document.createElement("div");
			
				//Create link
				var name_link = document.createElement("a");
				name_link.innerHTML = name;
				name_link.href = "resources/" + link;
                name_link.style.fontWeight = "800";

				//Relative paths always start from resources folder, otherwise external links added directly
				if (link.substring(0,4) == "http")
					name_link.href = link;
				else 
					name_link.href = "resources/" + link;
			
				//Create Description
				var oDescr = document.createElement("p");
				oDescr.innerHTML = description;
				
				//Create Date Display
				var oDate = document.createElement("p");
				oDate.innerHTML = "<b>Added:</b> " + dateAdded;
			
			left_col.style.float = "left";
			left_col.style.cssFloat = "left"; //For Mozilla
			left_col.style.clear = "left";
			left_col.style.overflow = "auto";
			left_col.style.width = "550px";
			
			left_col.appendChild(name_link);
			left_col.appendChild(oDescr);
			left_col.appendChild(oDate);
		
			//Right column to contain preview picture
			var img = document.createElement("img");
			img.src = "resources/previews/" + preview_link;
			
			img.style.display = "inline-block";
			img.style.float = "left";
			img.style.clear = "right";
			img.style.margin = "10px";
			img.style.width = "250px";
			img.style.height = "auto";
		
		resource.style.overflow = "auto";
		resource.style.padding = "20px 0";
		resource.style.backgroundColor= "#eeeeee";
		resource.style.borderRadius = "5px";
		resource.style.borderStyle = "none";
		resource.style.padding = "20px";
		resource.style.clear = "both";
		resource.style.margin = "20px 0";
		
		resource.appendChild(left_col);
		resource.appendChild(img);
		
		container.appendChild(resource);
	}
</script>

<label for="fKeywords">Filtered Phrase:</label>
<input type="text" id="fKeywords" name="fKeywords" onkeyup="update_results(this.value)"><br>
<div id="container"></div>

<br>

<script> update_results(""); //Show all icons at first </script>

<?php require($template_root . 'template1_bodyend.phtml'); ?>