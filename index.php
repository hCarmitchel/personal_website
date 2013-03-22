<!DOCTYPE html> 

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="static/css/style.css" media="screen" />

	<meta name="description" content="Heather Carmitchel's personal website" />
	<meta name="keywords" content="Heather Carmitchel, hCarmitchel, h17, CIS" />
	<meta name="author" content="Heather Carmitchel" />
	<meta charset="UTF-8" />
	
	<title>About | Heather Carmitchel</title>
</head>
<body>
	<div id="top">
		<div id="header">
			<div class="container">
				<div class="row" id="linksBar">
					<div class="span4 offset1">
						<a href="index.php"><h1>Heather Carmitchel</h1></a>
					</div>
					<div class="span7">
							<div id="search-div" data-spy="affix" data-offset-top="20" style="margin-left:450px; width:200px; z-index:1000"><gcse:search></gcse:search></div>
					</div>
				</div>
			</div>
		</div> 
		
		<div id="navigation" data-spy="affix" data-offset-top="50">
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li id="about" class=" active" ><a href="index.php">About</a></li>
							<!--   <li><a href="/templates/posts.html">Blog</a></li>  !--> 
							<li class="dropdown" id="portfolio">
								<a class="dropdown-toggle " data-toggle="dropdown" href="#portfolio">Portfolio</a>
								<ul class="dropdown-menu" id="portfolioDropdown">
									<li><a href="work-projects.php" >Work Projects</a></li>
									<li><a href="course-projects.php" >Course Projects</a></li>
									<li><a href="personal-projects.php" >Personal Projects</a></li>
								</ul>
							</li> 
							<li class="dropdown" id="resume">
								<a class="dropdown-toggle " data-toggle="dropdown" href="#resume">R&eacute;sum&eacute;</a>
								<ul class="dropdown-menu" id="resumeDropdown">
									<li><a href="resume.php" >PDF version</a></li>
									<li><a href="resume-online.php" >HTML version</a></li>
								</ul>
							</li>
							<li id="calendar" ><a href="calendar.php">Calendar</a></li>
							<li id="cis598" ><a href="cis598.php">CIS 598</a></li>
							<li id="credits" ><a href="credit.php">Credits</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
  
	<div class="container" id="page" >
		<div class="row">
			<div class="span3" style="margin-left:0; width:210px;">
				<img height="286" width="200" class="img-polaroid" src="static/img/profilepic.jpg" alt="My picture"/>
			</div>
			<div class="span7" style="margin-left:40px; margin-top:40px; width:740px">
				<div class="paragraph">
					<div style="text-align:center;"><h1 id="dayOfWeek" style="font-size:25px; font-family:">Welcome!</h1></div>
					<hr class="high"/>
					<p>My name's Heather and I'm a <a href="http://www.cis.ksu.edu/programs/undergrad/cs">Computer Science</a> 
					student at <a href="http://www.k-state.edu/">Kansas State University</a>.</p>
				</div>
				<div class="paragraph">
					<p>This website was created partially for the experience, and partially to connect my separate web presences. For more 
					detail, visit <a href="personal-projects.php" target="_blank">its page</a> or, to download a copy of this project, see its 
					<a target="_blank" href="https://github.com/hCarmitchel/personal_website">Github project page</a>. 
					<p>I expect to update this site with more projects and products as I move forward in my education and career.</p>
				</div>
				<div class="paragraph">
					<p>For more information, questions or concerns, <a data-toggle="modal" href="#feedbackModal">send me a quick email</a>!</p>
				</div>
			</div>
		</div>
		<br/>
	</div>  

	<div id="footer">
		<div class="container" id="pageFooter"></div>
		<div class="container" id="footerContent">
			<div class="row" style="margin-left:0; width:1180px">
				<div class="span4 footerSection">
					<h3>Resume</h3>
					<hr class="embossed"/>
					<ul class="downloads">
						<li><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;" ><i class="icon-download-alt icon-white"></i>&nbsp;.pdf</button></li>
						<li><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;" ><i class="icon-download-alt icon-white"></i>&nbsp;.odt</button></li>
						<li><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;" ><i class="icon-download-alt icon-white"></i>&nbsp;.docx</button></li>
						<li><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;" ><i class="icon-download-alt icon-white"></i>&nbsp;.zip</button></li>
					</ul>
				</div>
				<div class="span4 footerSection">	
					<h3>Links</h3>	
					<hr class="embossed"/>
					<div class="span2" style="width:130px">
						<ul>
							<li><a href="https://github.com/hCarmitchel" class="links" target="_blank"><img class="ico" height="24" width="24"  src="static/img/github.png" alt="Github"/>&nbsp;&nbsp;&nbsp;Github</a></li>
							<li><a href="http://www.linkedin.com/pub/heather-carmitchel/45/107/515 " target="_blank" class="links"><img class="ico" height="24" width="24"  src="static/img/linkedin.png" alt="LinkedIn"/>&nbsp;&nbsp;&nbsp;LinkedIn</a></li>
							<li><a href="http://www.facebook.com/hcarmitchel" target="_blank" class="links"><img class="ico" height="24" width="24"  src="static/img/facebook.png" alt="Facebook"/>&nbsp;&nbsp;&nbsp;Facebook</a></li>
						</ul>
					</div>
					<div class="span2" style="margin-left:0; width:140px;">
						<ul style="margin-left:0">
							<li><a href="https://plus.google.com/106434111080335636000/about" class="links" target="_blank"><img class="ico" height="24" width="24"  src="static/img/google-plus.png" alt="Google+"/>&nbsp;&nbsp;&nbsp;Google+</a></li>
							<li><a href="http://stackoverflow.com/users/1459011/hcarmitchel" target="_blank" class="links"><img class="ico" height="24" width="24"  src="static/img/stackoverflow.png" alt="Facebook" />&nbsp;&nbsp;&nbsp;Stack Overflow</a></li>
							<li><a href="https://twitter.com/hcarmitchel" target="_blank" class="links" ><img class="ico" height="24" width="24" src="static/img/twitter.png" alt="Twitter"/>&nbsp;&nbsp;&nbsp;Twitter</a></li>
						</ul>
					</div>
				</div>
				<div class="span4 footerSection">	
					<h3>About Me</h3>	
					<hr class="embossed"/>
					<div style="margin:0 30px 0 40px">
						I'm Heather Carmitchel, a student at <a href="http://www.k-state.edu/">Kansas State University</a>, 
						majoring in <a href="http://www.cis.ksu.edu/programs/undergrad/cs">Computer Science</a>. 
						To talk about job opportunities, get in touch, or offer feedback you can use the 
						<a data-toggle="modal" href="#feedbackModal">contact form</a>.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<p id="back-top">
						<a href="#top"><span></span></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="feedback">
		<a data-toggle="modal" href="#feedbackModal"><i style="font-style:normal;" class="icon-envelope icon-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</i></a>
	</div>
	
	<?php include 'feedback.php'; ?> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="static/js/bootstrap.min.js" type="text/javascript"></script>
	
	<script src="static/js/jquery.validate.js" type="text/javascript"></script>
    <script src="static/js/jquery.validate.unobtrusive.js" type="text/javascript"></script>
    <script src="static/js/jquery.validate.bootstrap.js" type="text/javascript"></script> 
	
	    
	<script>
		
	var myCallback = function() {
		$('#gsc-i-id1').focus(function(){ $('#search-div').addClass('wide'); });
		$('#gsc-i-id1').blur(function(){ $('#search-div').removeClass('wide'); });
	};
	
	window.__gcse = {  callback: myCallback };

	(function() {
	  var cx = '017698790745899192621:jgewdui6jdo';
	  var gcse = document.createElement('script'); gcse.type = 'text/javascript';
	  gcse.async = true;
	  gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		  '//www.google.com/cse/cse.js?cx=' + cx;
	  var s = document.getElementsByTagName('script')[0];
	  s.parentNode.insertBefore(gcse, s);
	})();
	</script>
	
    <script type="text/javascript">
    //<![CDATA[
	  $(document).ready(function(){
			// Create Welcome date message
	  		$(function () {
				var d=new Date();
				var weekday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
				if (document.getElementById("dayOfWeek") != null && d != null) {
					document.getElementById("dayOfWeek").innerHTML = "Happy "+weekday[d.getDay()]+"!";
				}
			});
			
			
			$('.links').tooltip({placement: "bottom"});

			// Adds and removes active class and dropdown on hover instead of click for 'Portfolio' Dropdown
			$('.navbar li.dropdown').hover(
				function(){
					$(this).addClass('open').find('ul').stop(true,true).hide().fadeIn('500');
					$(this).addClass('active');
				},
				function(){
					$(this).removeClass('active');
					$(this).removeClass('open').find('ul').stop(true,true).fadeOut('2000');
				}
			);
			$('.navbar li.dropdown li').unbind('mouseover').unbind('mouseout');
			
			// Handles 'back-top' icon fade in/out and action
			$("#back-top").hide();
			$(window).scroll(function () {
				if ($(this).scrollTop() > 275) {
						$('#back-top').fadeIn();
				} else {
						$('#back-top').fadeOut();
				}
			});
			$('#back-top a').click(function () {
				$('body,html').animate({
						scrollTop: 0
				}, 0);
				return false;
			});
		}); 
		function callback() {}
	//]]>  
	</script>
  </body>
</html>