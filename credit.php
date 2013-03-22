<!DOCTYPE html> 
	
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="static/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="static/css/credit-styles.css" media="screen" />
	
	<meta name="description" content="Heather Carmitchel's credits page" />
	<meta name="keywords" content="Heather Carmitchel" />
	<meta name="author" content="Heather Carmitchel" />
	<meta charset="UTF-8" />
	
	<title>Credits | Heather Carmitchel</title>
</head>
<body>
	<div id="top">
		<div id="header">
			 <div class="container">
				<div class="row" id="linksBar">
					<div class="span4 offset1">
						<a href="index.php"><h1 class="league">Heather Carmitchel</h1></a>
					</div>
					<div class="span7">
						<a data-spy="affix" data-offset-top="20" href="https://twitter.com/hcarmitchel" class="links" target="_blank" title="Twitter" style="z-index:1000; right:121px; top:2px;">
							<img class="ico" height="24" width="24" src="static/img/twitter.png" alt="Twitter" />
						</a>
						<a data-spy="affix" data-offset-top="20" href="http://www.facebook.com/hcarmitchel" target="_blank" class="links" title="Facebook" style="z-index:1000; right:162px; top:2px;">
							<img class="ico" height="24" width="24"  src="static/img/facebook.png" alt="Facebook"/>
						</a>
						<a data-spy="affix" data-offset-top="20" href="http://www.linkedin.com/pub/heather-carmitchel/45/107/515 " target="_blank" class="links" title="Linkedin" style="z-index:1000; right:203px; top:2px;">
							<img class="ico" height="24" width="24"  src="static/img/linkedin.png" alt="LinkedIn"/>
						</a>
						<a data-spy="affix" data-offset-top="20" href="https://github.com/hCarmitchel" class="links" target="_blank" title="Github" style="z-index:1000; right:244px; top:2px;">
							<img class="ico" height="24" width="24"  src="static/img/github.png" alt="Github"/>
						</a>
					</div>
				</div>
			</div>
		</div> 

		<div id="navigation"  data-spy="affix" data-offset-top="50">
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li id="about" ><a href="index.php">About</a></li>
							<!--   <li><a href="/templates/posts.html">Blog</a></li>  !--> 
							<li class="dropdown navLink" id="portfolio">
								<a class="dropdown-toggle navLink" data-toggle="dropdown" href="#portfolio">Portfolio</a>
								<ul class="dropdown-menu">
									<li><a href="work-projects.php">Work Projects</a></li>
									<li><a href="course-projects.php">Course Projects</a></li>
									<li><a href="personal-projects.php">Personal Projects</a></li>
								</ul>
							</li>
							<li class="dropdown " id="resume">
								<a class="dropdown-toggle " data-toggle="dropdown" href="#resume">R&eacute;sum&eacute;</a>
								<ul class="dropdown-menu" id="resumeDropdown">
									<li><a href="resume.php" >PDF version</a></li>
									<li><a href="resume-online.php" >HTML version</a></li>
								</ul>
							</li>
							<li id="calendar"><a href="calendar.php">Calendar</a></li>
							<li id="cis598"><a href="cis598.php">CIS 598</a></li>
							<li id="credit" class="navLink active"><a href="credit.php">Credits</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="page">
		<div class="row">
			<div class="span12">
				<div class="paragraph">
					<div><h1>Credits</h1></div>
					<hr class="high"/>
				</div>
			</div>
			<div class="span12">
				<ul id="list" style="margin-bottom:15px">
					<li style="text-align:center">
						<br/>
						<br/>
						<h1 style="line-height:18px;">Where it's due.</h1>
						<br/>
						<i class="icon-heart" style="margin-top:15px;"></i>
					</li>
					<li id="1"><div><img src="static/img/Jessyka.png" alt="Jessyka" /></div><h5>Jessyka</h5><h6>Best Friend</h6></li>
					<li id="2"><div><img src="static/img/Robert.jpg" alt="Robert" /></div><h5>Robert</h5><h6>Boyfriend</h6></li>
					<li id="3"><div><img src="static/img/Mom.jpg" alt="Mom" /></div><h5>Mom</h5></li>
					<li id="4"><div><img src="static/img/Seymour.png" alt="Seymour" /></div><h5>Seymour</h5><h6>Puppy</h6></li>
					<li id="5"><div><img src="static/img/Dad.jpg" alt="Dad" /></div><h5>Dad</h5></li>
					<li id="6"><div><img src="static/img/G&amp;G.jpg" alt="Grandpa & Grandma" /></div><h5>Grandpa & Grandma</h5></li>
					<li id="7"><div><img src="static/img/Luke.jpg" alt="Luke" /></div><h5>Luke</h5><h6>Brother</h6></li>
				</ul>
			</div>
		</div>	
		<div class="row">
			<div class="span12">
				<div class="btn-group" style="margin-left:430px;">
					<button class="btn btn-primary prev" id="prev" style="min-height:28px"><i class="icon-chevron-left icon-white"></i></button>
					<button class="btn btn-primary togglePlay" id="startBtn" onclick="changeStart()" style="min-height:30px">Start</button>
					<button class="btn btn-primary next" id="next" style="min-height:28px"><i class="icon-chevron-right icon-white"></i></button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div style="margin-top:10px; height:115px;">&nbsp;<div id="description"></div></div>
			</div>
		</div>
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
	
	
	<script src="static/js/jquery.roundabout.js" type="text/javascript"></script>
	<script src="static/js/jquery.roundabout-shapes.js" type="text/javascript"></script>
	<script src="static/js/jquery.event.drag-2.2.js" type="text/javascript"></script>
	<script src="static/js/jquery.event.drop-2.2.js" type="text/javascript"></script>
	<script type="text/javascript">
	//<![CDATA[
	  $(document).ready(function(){
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
			
			// Activate roundabout
			$('#list').roundabout({
				enableDrag: true,
				minopacity: 1,
				dragFactor: 1,
				btnToggleAutoplay: ".togglePlay",
				autoplayDuration: 1850,
				btnPrev: ".prev",
				btnNext: ".next",
				triggerBlurEvents: true,
				triggerFocusEvents: true
			});	
			
			// Hides the description when blurring
			$('#list li').blur(function() { $(document.getElementById('description')).fadeOut(); });
			
			// Changes the description when a credit image is focused on
			$('#list li').focus(function() {
				var d = document.getElementById('description');
				var alt = $(this).find('img').attr('alt');
				if (alt=='Luke') { 
					d.innerHTML = "<h1>Luke</h1><hr class='high'>Lorem ipsum dolor sdfsdfsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; } 
				else if (alt=='Seymour') { 
					d.innerHTML = "<h1 style='display:inline-block'>Seymour</h1><h6 style='display:inline-block'>Puppy</h6><hr class='high'>Lorem ffdsssss ssss sdf ssssssss sss sssssssipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; } 
				else if (alt=='Jessyka') { 
					d.innerHTML = "<h1>Jessyka</h1><hr class='high'>Lorffffffffffffffem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; } 
				else if (alt=='Dad') { 
					d.innerHTML = "<h1>Dad</h1><hr class='high'>Lorem ipsum dolor fds  sit amet fds, consectetur fdsfadipisicing esdfdslit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; } 
				else if (alt=='Mom') { 
					d.innerHTML = "<h1>Mom</h1><hr class='high'>Losdfdsrem ipsdfsdfsum dolor sit amet, consecfsdftetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum;" } 
				else if (alt=='Grandma & Grandpa') { 
					d.innerHTML = "<h1>Grandma & Grandpa</h1><hr class='high'>Lofsdfrem ipsum dolor sit amet, consectefdsfdtur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; } 
				else if (alt=='Robert') { 
					d.innerHTML = "<h1>Robert</h1><hr class='high'>Lofsdrem ipsum dolofsdr sit amet, cofdsnsectetur adipisicing elisdffsdt, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"; } 
				else { d.innerHTML = "&nbsp"; }	
				$(d).fadeIn(); 
			});
		}); 
		
		// Changes text and state of start/stop button 
		function changeStart() {
			var startBtn = document.getElementById("startBtn");
			if (startBtn.innerHTML=="Start") {
				startBtn.innerHTML = "Stop";
				$('#next').addClass('disabled');
				$('#prev').addClass('disabled');
			} else {
				startBtn.innerHTML = "Start";
				$('#prev').removeClass('disabled');
				$('#next').removeClass('disabled');
			}
		}
		
		// Shuffles credit photos
		function shuffle(a, b) { 
			return Math.random() > 0.5 ? -1 : 1; 
		}
		var originalimages = ["<div><img src='static/img/Jessyka.png' alt='Jessyka' ></div><h5>Jessyka</h5><h6>Best Friend</h6>", 
							  "<div><img src='static/img/Robert.jpg' alt='Robert' ></div><h5>Robert</h5><h6>Boyfriend</h6>", 
							  "<div><img src='static/img/Dad.jpg' alt='Dad' ></div><h5>Dad</h5>", 
							  "<div><img src='static/img/Mom.jpg' alt='Mom' ></div><h5>Mom</h5>", 
							  "<div><img src='static/img/Seymour.png' alt='Seymour' ></div><h5>Seymour</h5><h6>Puppy</h6>", 
							  "<div><img src='static/img/Luke.jpg' alt='Luke' ></div><h5>Luke</h5><h6>Brother</h6>", 
							  "<div><img src='static/img/G&G.jpg' alt='Grandma & Grandpa' ></div><h5>Grandma and Grandpa</h5>"];
		var randomimages = originalimages.sort(shuffle);
		for (var i=0; i<7; i++) {
			document.getElementById(i+1).innerHTML=randomimages[i];
		}
	//]]>  
	</script>
</body>
</html>