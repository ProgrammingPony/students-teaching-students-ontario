<?php
//REMOVE FOLDER EXTENTION AFTER PUTTING ONLINE
require( $_SERVER['DOCUMENT_ROOT'] . '/sts_07-16-2014' . 'template/template1_variables.php');
require($template_root . 'template1_head.phtml');
?>
<meta name="description" content="How to get in touch with Students Teaching Students. This can be for general inquiries and for science fair registrations. STS">
<meta name="keywords" content="contact us, sts, students teaching students, amna hyder">
<TITLE>STS - Contact Us</TITLE>
<style>
#left-column {
	clear:left;
	float:left;
	width:600px;
	overflow:auto;
}

#right-column {
	clear:right;
	float:left;
	width:300px;
	text-align:center;
	overflow:auto;
}

#amna-pic {
	width:200px;
	height:auto;
}
</style>
<?php require($template_root . 'template1_bodystart.phtml'); ?>

<div id="left-column">
	<span class="header1">General Contact Information</span>
	<p>For teaching sponsorship information, how to get involved, guest lecture information or other inquiries please email: <a href="mailto:studentsteachingstudentsON@gmail.com">studentsteachingstudentsON@gmail.com</a></p>

	<p>For further information you can also contact the club president Amna Hyder at:</p>
	<p>(647) 786-2662</p>
</div>

<div id="right-column">
	<img id="amna-pic" src="images/AmnaH.jpg">
</div>



<?php require($template_root . 'template1_bodyend.phtml'); ?>