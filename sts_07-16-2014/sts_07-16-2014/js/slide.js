//GLOBAL VARIABLES
imageSlideSelectedImageNum = 0; //Selected Slide Number
autoSlideChangeSpeed = 2500;
maxSlideIndex = 4; //n slides - 1 assuming first slide is 0

//FUNCTIONS
function imageSlideChangeSelected (element, imageNum) {
  var currentTab = document.getElementById("tab-" + imageSlideSelectedImageNum);
  //tab.setAttribute("style", "border-color:#000000;border-style:solid;border-width:thin;background-color:#000000;margin:10px;");
  currentTab.style.backgroundColor = "#000000";  
  
  imageSlideSelectedImageNum = imageNum;
  
  //element.setAttribute("style", "border-color:#000000;border-style:solid;border-width:thin;background-color:#EEEEEE;margin:10px;");
  element.style.backgroundColor = "#eeeeee";
  
  document.getElementById("image-slide").setAttribute("src", imageSlideImages[imageNum]);
}


function slideTabHovered (element, imageNum) {
	imageSlideChangeSelected (element, imageNum);
	clearInterval(autoSlideChanger);
}

function slideTabMouseOut () {
	autoSlideChanger = setInterval(function(){nextSlide()}, autoSlideChangeSpeed); //Automated slide switcher when user not using the slides
}

function nextSlide () {
  //document.write("nextSlideTestPoint!");
  var nextTab;
  if (imageSlideSelectedImageNum == maxSlideIndex) {
    nextTab = document.getElementById("tab-0");
    imageSlideChangeSelected(nextTab, 0);
  }
  else {
    nextTab = document.getElementById("tab-" + (imageSlideSelectedImageNum + 1));
    imageSlideChangeSelected(nextTab, imageSlideSelectedImageNum + 1);
  }  

}

//ON LOAD
//Initialize tabs
for (var i = 0; i <= maxSlideIndex; i++) {
 var tab = document.getElementById("tab-" + i);
 
 //Initialize border properties
 //tab.setAttribute("style", "border-color:#000000;border-style:solid;border-width:thin;background-color:#000000;margin:10px;");
 tab.style.borderColor = "#000000";
 tab.style.borderStyle = "solid";
 tab.style.borderWidth = "thin";
}

imageSlideChangeSelected(document.getElementById("tab-0"), imageSlideSelectedImageNum); //Select first slide

autoSlideChanger = setInterval(function(){nextSlide()}, autoSlideChangeSpeed); //Automated slide switcher when user not not hovered on a tab

