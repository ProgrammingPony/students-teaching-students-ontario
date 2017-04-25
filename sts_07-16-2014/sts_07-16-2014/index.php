<?php
//REMOVE FOLDER EXTENTION AFTER PUTTING ONLINE
require( $_SERVER['DOCUMENT_ROOT'] . '/sts_07-16-2014' . '/template/template1_variables.php');
require($template_root . 'template1_head.phtml');
?>
<meta name="description" content="We are Students Teaching Students! An introduction of who we are and what we do!">
<meta name="keywords" content="sts, students teaching students, about us, science fair, introduction, lectures">
<TITLE>STS - Home</TITLE>
<style>
#science-fair-video {
	width:560px;
	height:315px;
	margin:20px auto;
}

#science-fair-contact-button {
	width:94%;
	border-radius:3px;
	border-style:inset;
	border-color:#AAAAAA;
	border-width:1px;
	margin:0.5vh auto;
	display:block;
	text-align:center;
	background-color:#aaaaaa;
	padding:1vh 0;
}

#science-fair-contact-button a {
	font-weight:600;
	text-transform:uppercase;
	font-size:20px;
}
</style>
<link rel="stylesheet" type="text/css" href="styles/slide.css">

<?php require($template_root . 'template1_bodystart.phtml'); ?>

<span class="header1">What We Do:</span>
<p>We are a <span class="bold1">volunteer group</span> of <span class="bold3">motivated</span> university 
students with a <span class="bold2">passion</span> for teaching students from 
<span class="bold2">elementary</span> to <span class="bold2">secondary</span> school about our areas of 
study, ranging from the language arts and humanities to the various sciences. We enable students to draw 
<span class="bold2">connections</span> between what they are learning in class and its applications in 
current worldwide issues.</p>

<!--Image Slide-->
<div id="image-slide-container" style="width:600px; margin:20px auto;">
<img id="image-slide" src="Images/Home/Slide/210575_4585902768250_1279884988_o-1_600x300_scaled_cropp.jpg">
	<div id="tab-0" type="leftmost" class="slide-tab" onmouseover="slideTabHovered (this, 0)" onmouseout="slideTabMouseOut()"></div>
	<div id="tab-1" type="center" class="slide-tab" onmouseover="slideTabHovered (this, 1)" onmouseout="slideTabMouseOut()"></div>
	<div id="tab-2" type="center" class="slide-tab" onmouseover="slideTabHovered (this, 2)" onmouseout="slideTabMouseOut()"></div>
	<div id="tab-3" type="center" class="slide-tab" onmouseover="slideTabHovered (this, 3)" onmouseout="slideTabMouseOut()"></div>
	<div id="tab-4" type="rightmost" class="slide-tab" onmouseover="slideTabHovered (this, 4)" onmouseout="slideTabMouseOut()"></div>
</div>

<div id="preload" style="display:none">
	<img src="images/slide/210575_4585902768250_1279884988_o-1_600x300_scaled_cropp.jpg" style="width:1px; height:auto"/>
	<img src="images/slide/320003_10150352768937375_264011984_n-1_600x300_scaled_cropp.jpg" style="width:1px; height:auto"/>
	<img src="images/slide/465702_10150624424226091_1637182937_o-1_600x300_scaled_cropp.jpg" style="width:1px; height:auto"/>
	<img src="images/slide/547522_10151533809917375_882274103_n-1_600x300_scaled_cropp.jpg" style="width:1px; height:auto"/>
	<img src="images/slide/Screen Shot 2013-09-11 at 3.45.49 PM_600x300_scaled_cropp.jpg" style="width:1px; height:auto"/>
</div>

<script>
imageSlideImages = new Array(
	"images/slide/210575_4585902768250_1279884988_o-1_600x300_scaled_cropp.jpg",
	"images/slide/320003_10150352768937375_264011984_n-1_600x300_scaled_cropp.jpg",
	"images/slide/465702_10150624424226091_1637182937_o-1_600x300_scaled_cropp.jpg",
	"images/slide/547522_10151533809917375_882274103_n-1_600x300_scaled_cropp.jpg",
	"images/slide/Screen Shot 2013-09-11 at 3.45.49 PM_600x300_scaled_cropp.jpg"
);
</script>
<script src="js/slide.js"></script>
<!--End Image Slide-->

<span class="header1">Guest Lectures:</span>
<p> We act as guest lecturers, and can modify our presentations to fit the curriculum of a given class. 
The aim is to provide a <span class="bold3">fresh new perspective</span> to the curriculum and also to 
be available to answer any potential questions about post-secondary pathways.</p>

<span class="header1">Science Fair:</span>
<p>We are hosting a <span class="bold2">science fair</span> soon for grade 9 students. Each student 
will be provided with a mentor who has research experience in the hopes that one-on-one guidance will 
better prepare them for scientific research in the future.</p>

<div id="science-fair-video">
	<iframe width="560" height="315" src="//www.youtube.com/embed/VWXHS4x1cH4" frameborder="0" allowfullscreen></iframe>
</div>

<div id="science-fair-contact-button">
	<a href="<?php echo $domain_base?>contact.php">Contact Us for a Guest Lecture</a>
</div>



<?php require($template_root . 'template1_bodyend.phtml'); ?>