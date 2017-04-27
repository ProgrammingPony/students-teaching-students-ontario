<?php
//REMOVE FOLDER EXTENTION AFTER PUTTING ONLINE
require( $_SERVER['DOCUMENT_ROOT'] . '/template/template1_variables.php');
require($template_root . 'template1_head.phtml');
?>
<meta name="description" content="An introduction to our team at Students Teaching Students! Founders and other individuals who made STS what it is!">
<meta name="keywords" content="sts, students teaching students, team, founder, pioneer, mentions, programs, science, journalism">
<TITLE>STS - Our Team</TITLE>
<STYLE>
.full-width-image {
	width:<?php echo $body_width;?>;
	height:auto;
	clear:both;
	margin:2vh 0;
}

.horizontal-divider {
	height:5px;
	margin:1vh 0;
	background-color:#555555;
}

.horizontal-divider[style=2] {
	background-color:#222222;
}

.name-label {
	font-size:21px;
	display:block;
	margin-top:2vh;
}

.position-label {
	font-size:19px;
	display:block;
	font-style:italic;
}

.profile-description {
	display:inline-block;
	width:670px;
	float:left;
}

.profile-description[salign=right] {
	clear:right;
}

.profile-description[salign=left] {
	clear:left;
}

.profile-image {
	display:inline-block;
	width:200px;
	margin:10px;
	float:left;
}

.profile-image[salign=right] {
	clear:right;
}

.profile-image[salign=left] {
	clear:left;
}

.profile-container {
	overflow:auto;
}

</STYLE>
<?php require($template_root . 'template1_bodystart.phtml'); ?>

<img src="images/team/team.jpg" class="full-width-image">

<span class="header1">Meet Our Team</span>
<p>The STS family is a diverse group of passionate, intelligent individuals that have alot to offer to students and teachers in middle schools, elementary schools and high schools across Canada.</p>

<div class="horizontal-divider"></div>

<div class="profile-container">
	<span class="profile-description" salign="left">
		<span class="name-label">Amna Hyder</span>
		<span class="position-label">Founder/President</span>
		<p>I founded this club in first year as a means to share the knowledge and skills that I had gained in my new interdisciplinary program Integrated Science at McMaster. What started out as a simple passion to excite others with what I knew, became quickly much bigger as other started to get involved. I am now in my fourth year of iSci with a concentration in physics at McMaster and love teaching and learning.</p>
	</span>
	<img class="profile-image" salign="right" src="images/AmnaH.jpg">
</div>

<br>
<div class="horizontal-divider"></div>

<span class="header1">Pioneers</span>
<p>The immediate support and involvement of a couple of individuals allowed STS to be what it is now.</p>


<div class="profile-container">
	<img class="profile-image" salign="left" src="images/team/HannahD.jpg">
	<span class="profile-description" salign="right">
		<span class="name-label">Hannah Dies</span>
		<span class="position-label">Cofounder</span>
		<p>I am a fourth year student at McMaster, studying Honour's Integrated Science with a concentration in Physics. I started working with STS in 2nd year, and have since presented at a number of high schools, with topics ranging from the physics of MRI to the use of radiation in cancer treatment. I have spent the last two summers, and will spend the upcoming year, working in a biophysics lab, where I study the structure of the Alzheimer's protein in biological membranes through the use of x-ray diffraction.</p>
	</span>
</div>

<div class="profile-container">
	<span class="profile-description" salign="left">
		<span class="name-label">Myles Marin</span>
		<span class="position-label">Cofounder</span>
		<p>I am an undergraduate student currently enrolled in McMaster University's Honour's Integrated Science program with a concentration in Mathematics. I hope to continue exploring applied mathematics, particularly topics in cryptography, in post-undergraduate studies. Setting educational interests aside, learning has always been enjoyable and something that I am very spirited about. My involvement in STS is centered on easing the passage of learning from elementary school to post-secondary studies. With STS I hope to bring enthusiasm and excitement to students and remove disparities in confidence as they make this leap in their education.</p>
	</span>
	<img class="profile-image" salign="right" src="images/team/MylesM.jpg">
</div>

<div class="horizontal-divider"></div>

<span class="name-label">Famya Mahmud</span>
<span class="position-label">Artistic Design</span>
<p>I'm a 4th year student at McMaster University in the Honours Math and Stats program. I am currently involved in some research with the applications of Graph theory. Our research involves producing mathematical models to see the relationship between protein-protein interactions. I first got involved in STS because it is a great way to share knowledge and learn new material. I believe that good teachers capture the attention of listeners and help assist in discoveries. I hope with this society I can help students find their passion and rekindle their desire to learn.</p>

<div class="horizontal-divider"></div>

<span class="name-label">Anastasia</span>
<span class="position-label">Vice President</span>
<p>I'm a passionate 4th year student at McMaster University in the Honour’s Life Science program. I am currently doing research in the ecology and evolution. I first got involved in STS because it was an avenue to share with others my love of science. I am excited to see where this organization can go, and how I can help in its progress.</p>

<div class="horizontal-divider"></div>

<div class="profile-container">
	<span class="profile-description" salign="left">
		<span class="name-label">Shreya Nag</span>
		<p>I am a junior Studio Arts student at McMaster University. My discipline is directed towards interior design. I initially got involved with STS as a tutee for Physics. I suppose I became somewhat dependent on this group; it made me realize how helpful STS really was, and that I wanted to contribute to this initiative.</p>
	</span>
	<img class="profile-image" salign="right" src="images/team/ShreyaN.jpg">
</div>

<div class="profile-container">
	<img class="profile-image" salign="left" src="images/team/CharlesY.jpg">
	<span class="profile-description" salign="right">
		<span class="name-label">Charles Yin</span>
		<p>I’m a senior biochemistry student at McMaster University. My research focuses on signal transduction systems in the innate immunity and how these systems help protect us from disease. I got involved in Students Teaching Students because it is a great initiative with real potential to make a difference. I, myself, first became interested in science through participating in research during high school. Through STS, I hope to be able to help others do the same.</p>
	</span>
</div>
		
<div class="profile-container">
	<span class="profile-description" salign="left">
		<span class="name-label">Omer Nasri</span>
		<p>I'm an Honour's Life Science student in level 2, working my way towards graduate school. I am striving to go to medical school; a goal I have always aspired towards. I took the first step to reaching my goal by earning admission in McMaster University. This was not an easy feat, and I had much help along the way which I am forever grateful for. It is for this reason that Students Teaching Students appealed to me. Many people are not always as priveleged to have people who are willing to go above and beyond and I believe everyone should have that type of a role model. Through STS, I want to become a role model for someone who was less fortunate.</p>
	</span>
	<img class="profile-image" salign="right" src="images/team/OmerN.jpg">
</div>

<div class="profile-container">
	<img class="profile-image" salign="left" src="images/team/Ibrahim.jpg">
	<span class="profile-description" salign="right">
		<span class="name-label">Ibrahim</span>
		<p>I'm a third year student studying Mathematics and Business Administration at the University of Waterloo and Wilfred Laurier University respectively. I have just recently joined STS and have been preparing to educate students in the field of financial services. This includes educating students on matters such as the financial collapse, the banking system, and helping them make personal financial decisions. By giving this knowledge we hope that students will make better economic decisions for themselves.</p>
	</span>
</div>
		
<div class="profile-container">
	<span class="profile-description" salign="left">
		<span class="name-label">Aisha</span>
		<p>I am a grade ten student currently studying at Woodlands Secondary School. I got involved in Students Teaching Students with inspiration, knowing that this organization can be the beginning of many opportunities. The experience of being part of the science community is valuable and may guide me onto my own career path. I admire the vision of keeping students informed on new science discoveries and technology. I believe Students Teaching Students will grow into a network-building device for the youth and I am glad to be a part of it.</p>
	</span>
	<img class="profile-image" salign="right" src="images/team/Aisha.jpg">
</div>

<div class="profile-container">
	<img class="profile-image" salign="left" src="images/team/BarbaraJ.jpg">
	<span class="profile-description" salign="right">
		<span class="name-label">Barbara Josic</span>
		<p>I'm a fourth year Mathematics and Statistics student with a minor in Economics. My main focus is in applied mathematics in everyday situations. I got involved with Students Teaching Students because I'd love to have the opportunity to share my knowledge and experience with younger students and help guide them in earlier years rather than later. When you are in high school you have a general idea of what university is and are not fully sure of what you want to do or how to go about that. I want to help change this. I want to help students get a grasp and a more concrete idea of what awaits them in the years to come in their field of interest.</p>
	</span>
</div>

<span class="name-label">Piotr Roztocki</span>
<p>I am a fourth year physics student in the Honours Integrated Science program at McMaster University. My past research experiences include projects in medical physics, quantum cryptography, and currently (my thesis in) nuclear waste management. I have yet to be as confused and scared as I was in grade 12 choosing my post-secondary route; my involvement in STS is directed at giving the kind of advice I would have wanted to receive then.</p>

<div class="horizontal-divider"></div>

<span class="name-label">Omar Abdel Bari</span>
<span class="position-label">Software Designer</span>
<p>I am studying my 4th year at McMaster University under Software Engineering and Management. I was happy to take the opportunity to put some of my efforts to help a few organizations dedicated to helping others. Though I have spent a lot of time this year working on web development, I will focus my future working on desktop applications and frameworks. I am also willing to give pointers on design and other software related topics.</p>

<div class="horizontal-divider"></div>

<div class="profile-container">
	<span class="profile-description" salign="left">
		<span class="name-label">Madison Reid</span>
		<span class="position-label">Finance Director</span>
		<p>As financial director of STS, I manage the budgets of the organization, as well as organize and participate in fundraising activities. Outside of STS, I am in my fourth year of the Integrated Science program at McMaster University, concentrating in Earth and Environmental Sciences, with a minor in Geograpic Information Systems. But enough about me already, I want to hear from you! If you have any questions about STS, or are interested in organizing a guest lecture or participating in the science fair, please don’t hesitate to contact us.</p>
	</span>
	<img class="profile-image" salign="right" src="images/team/MadisonR.jpg">
</div>

<div class="horizontal-divider" style="2"></div>

<span class="header1">Programs</span>
<p>Two new programs we are very proud of having as a part of our organization include:</p>

<span class="name-label">Integrated Science</span>
<p>McMaster’s Honour’s Integrated Science is an interdisciplinary program that expresses a holistic view of science through interdisciplinary research projects that develop and emphasize leadership, group work, time management, research, presentation skills, lab work and report writing.</p>
<p>The program draws on various disciplines including Life Science, Earth Science, Chemistry, Physics, Mathematics, Scientific Literacy and Neuroscience and Psychology, among others to solve several global challenges.</p>

<span class="name-label">Journalism</span>
<p>Ryerson University's Bachelor of Journalism is a hands-on program that equips students with the skills needed to succeed professionally in journalism. Located in the heart of downtown Toronto, the campus's location provides an ideal environment for budding reporters to learn the ropes. Students explore the bustling streets of the city in search of new stories and willing sources.</p>
<p>Unlike most university programs, which are solely theory-based, Ryerson Journalism seeks to combine theory with practical assignments. Guided by faculty members with extensive professional experience in the field, students learn basic skills for various mediums of journalism, such as print, broadcast, and online journalism. These skills are then put to the test in hands-on assignments that that must be completed under tight time restraints, as if for an actual publication.</p>
<p>Regarded by many journalism professionals as one of the best journalism programs in the country, Ryerson Journalism aims to prepare students specifically for their future careers.</p>

<?php require($template_root . 'template1_bodyend.phtml'); ?>
