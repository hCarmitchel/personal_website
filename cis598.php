<!DOCTYPE html> 
	
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="static/css/style.css" media="screen" />
	<link rel="stylesheet" href="static/css/projects-style.css" type="text/css" media="screen" />
	
	<meta name="description" content="Heather Carmitchel's page devoted to her senior project" />
	<meta name="keywords" content="Heather Carmitchel CIS CIS598" />
	<meta name="author" content="Heather Carmitchel" />
	<meta charset="UTF-8" />
	
	<title>CIS 598 | Heather Carmitchel</title>
</head>
<body>
	<div class="top">
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
								<a class="dropdown-toggle" data-toggle="dropdown" href="#portfolio">Portfolio</a>
								<ul class="dropdown-menu">
									<li><a href="work-projects.php">Work Projects</a></li>
									<li><a href="course-projects.php">Course Projects</a></li>
									<li><a href="personal-projects.php">Personal Projects</a></li>
								</ul>
							</li> 
							<li class="dropdown " id="resume">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#resume">R&eacute;sum&eacute;</a>
								<ul class="dropdown-menu" id="resumeDropdown">
									<li><a href="resume.php" >PDF version</a></li>
									<li><a href="resume-online.php" >HTML version</a></li>
								</ul>
							</li>
							<li id="calendar"><a href="calendar.php">Calendar</a></li>
							<li id="cis598" class="active"><a href="cis598.php">CIS 598</a></li>
							<li id="credit"><a href="credit.php">Credits</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container" id="page">
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#project" data-toggle="tab">Project</a></li>
				<li><a href="#log" data-toggle="tab">Time Log</a></li>
				<li><a href="#graphs" data-toggle="tab">Graphs</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="project">
					<div class="row">
						<div class="span5" style="margin-left:20px">
							<br>
							<h2>Description</h2>
							<hr class="high"/>
							<b>Problem:</b> while many websites devoted to television and movies allow users to rate them, 
							there is no place where these ratings can be viewed together and compared to derive statistics/patterns.
							<br>
							<b>Solution:</b> a website that pulls in ratings from sites such as IMDb, TV.com, Metacritic, etc.
							<br><br>
							<b>Advisor:</b> <a href="http://people.cis.ksu.edu/~dcaragea/" target="_blank">Doina Caragea</a
							<br><br>
							<h2>Requirements/Specifications</h2>
							<hr class="high"/>
							<ul>
								<li>Rails web application</li>
								<li>Postgres database</li>
								<li><a href="https://github.com/hCarmitchel/cis598.git" target="_blank">Github repo</a></li>
								<li>Multiple sources: IMDB & Netflix at least</li>
							</ul>
							<h2>Additional (Time-Allowing) Requirements</h2>
							<hr class="high"/>
							<ul>
								<li>User's IMDB stats upload tool</li>
								<li>Reviews</li>
								<li>Search funtionality</li>
							</ul>
							<h2>Project resources</h2>
							<hr class="high"/>
							<ul>
								<li><a href="https://moqups.com/hCarmitchel/heOKBCtR/" target="_blank">Website mockup</a></li>
							</ul>
							<hr>
							Last updated March 14, 2013.
						</div>
						<div class="span5" style="margin-left:20px">
							<iframe src="https://docs.google.com/presentation/d/1SyN0-U5doxCXNOW5M1JkhCXxdUwDh8OIQaCgXP5n5GQ/embed?start=false&amp;loop=false&amp;delayms=3000" width="440" height="349"></iframe>
							<h6>Presentation 1</h6>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="log">
					<div id="table_div" style="width:1000; height:300"></div>
				</div>
				<div class="tab-pane" id="graphs">
					<div class="row" style="height:350px">
						<div class="span4">
							<div id="chart_div" style="width:450; height:300; z-index:100;"></div>
						</div>
						<div class="span4" style="margin-left:90px">
							<div id="chart2_div" style="z-index:100;"></div>
						</div>
					</div>
				</div>
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
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
	
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
			$('a[data-toggle="tab"]').on('shown', function (e) {
				var selector = 'project';
				if($('#project').hasClass('active')) { selector = '#project'; }
				if($('#log').hasClass('active')) { selector = '#log'; }
				if($('#graphs').hasClass('active')) { selector = '#graphs'; }
				$('#page').css('height', $(selector).height()+100);
				$('#content').css('height', $(selector).height()+100);
			});
		}); 
     		var data;
    		var chart;

      		// Load the Visualization API and the piechart package.
      		google.load('visualization', '1', {'packages':['table', 'corechart']});

      		// Set a callback to run when the Google Visualization API is loaded.
      		google.setOnLoadCallback(drawChart);

      		// Callback that creates and populates a data table,
      		// instantiates the pie chart, passes in the data and draws it.
      		function drawChart() {

				// Create our data table.
				data = new google.visualization.DataTable();
				data.addColumn('string', 'Category');
				data.addColumn('string', 'Time');
				data.addColumn('date', 'Date');
				data.addColumn('date', 'Begin');
				data.addColumn('date', 'End');
				data.addColumn('string', 'Task');
				data.addColumn('string', 'Note');
				data.addRows([
					['Meeting','0:15',new Date("2013 03 04,12:52:39"), new Date("2013 03 01,14:00:39"), new Date("2013 03 01,14:15:39"),'Meeting with Advisor', 'Discussing project progress'],
					['Development','0:46',new Date("2013 02 22,12:52:39"), new Date("2013 03 01,07:24:39"), new Date("2013 03 01,08:10:39"),'Website', 'Updated website'],
					['Development','2:10',new Date("2013 03 07,12:52:39"), new Date("2013 03 01,20:50:39"), new Date("2013 03 01,23:00:39"),'Project', 'Created Ruby project, hooked it into Git'],
					['Development','0:50',new Date("2013 03 11,12:52:39"), new Date("2013 03 01,14:30:39"), new Date("2013 03 01,15:20:39"),'Project', 'Working on environment stuff'],
					['Development','1:08',new Date("2013 03 01,12:52:39"), new Date("2013 03 01,12:52:39"), new Date("2013 03 01,02:00:39"),'Website', 'Updated website'],
					['Development','0:15',new Date("2013 03 14,12:52:39"), new Date("2013 03 01,14:30:39"), new Date("2013 03 01,14:45:39"),'Website', 'Updated website'],
					['Development','2:40',new Date("2013 01 28,05:10:39"), new Date("2013 01 28,17:10:39"), new Date("2013 01 28,19:50:39"),'Website', 'Created website'],
					['Development','3:23',new Date("2013 03 13,12:52:39"), new Date("2013 03 01,15:00:39"), new Date("2013 03 01,18:23:39"),'Project', 'Lots of db work, setting up Postgresql on machine and building db'],
					['Development','2:35',new Date("2013 03 13,19:52:39"), new Date("2013 03 01,19:10:39"), new Date("2013 03 01,21:45:39"),'Project', 'Adding gems/apps stuff: bootstrap, flexslider, tablesorter'],	
					['Development','2:40',new Date("2013 03 16,05:10:39"), new Date("2013 01 28,17:10:39"), new Date("2013 01 28,19:50:39"),'Project', 'Added datatables, ajax'],
					['Development','5:00',new Date("2013 03 19,12:52:39"), new Date("2013 03 01,18:00:39"), new Date("2013 03 01,23:00:39"),'Project', 'Working on parsing movies.list (shows)'],
					['Development','3:30',new Date("2013 03 20,19:52:39"), new Date("2013 03 01,15:10:39"), new Date("2013 03 01,18:40:39"),'Project', 'Working on parsing movies.list (seasons, episodes)'],						
					['Documentation','1:30',new Date("2013 02 14,18:52:39"), new Date("2013 02 14,18:50:39"), new Date("2013 02 12,20:20:39"),'Presentation', 'Finished presentation 1'],
					['Documentation','0:45',new Date("2013 02 12,12:52:39"), new Date("2013 02 12,17:10:39"), new Date("2013 02 12,17:55:39"),'Presentation', 'Working on presentation 1'],
					['Planning','0:36',new Date("2013 02 01,12:52:39"), new Date("2013 01 12,19:22:39"), new Date("2013 06 12,19:58:39"),'Discussion', 'Talking to others about what project to work on'],
					['Planning','2:48',new Date("2013 02 05,12:52:39"), new Date("2013 01 12,17:01:39"), new Date("2013 06 12,19:49:39"),'Research', ''],
					['Planning','1:57',new Date("2013 01 12,12:52:39"), new Date("2013 01 12,12:52:39"), new Date("2013 06 12,12:52:39"),'Research', '']
				]);
				var formatter = new google.visualization.DateFormat({pattern: "MM/dd/yy"});
				formatter.format(data,2);
				formatter2 = new google.visualization.DateFormat({pattern: "hh:mmaa"});
				formatter2.format(data,3);
				formatter2.format(data,4);

				// Set chart options
				options = {'width':995,'height':600,'z-index':1,'sortColumn':2};
			
				// Instantiate and draw our table, passing in some options.
				var table = new google.visualization.Table(document.getElementById('table_div'));
				table.draw(data, options);
				
				data = new google.visualization.DataTable();
				data.addColumn('string', 'Category');
				data.addColumn('number', 'Hours');
				data.addRows([
					['Development', 1],
					['Planning', 4],
					['Meeting', 6]
				]);
				// Set chart options
				var options = {'title':'Senior Project Category Distributions',
					   'is3D':true,
					   'width':450,
					   'height':300,'z-index':1};
					   
				// Instantiate and draw our chart, passing in some options.
				chart = new google.visualization.PieChart(document.getElementById('chart_div'));
				google.visualization.events.addListener(chart, 'select', selectHandler);
				chart.draw(data, options);
				
				data = new google.visualization.DataTable();
				data.addColumn('string', 'Category');
				data.addColumn('number', 'Hours');
				data.addRows([
					['1', 5],
					['2', 6],
					['3', 0]
				]);
				options = {'title':'Weekly hours',
					   'is3D':true,
					   'width':450,
					   'height':300};
				chart = new google.visualization.PieChart(document.getElementById('chart2_div'));
				google.visualization.events.addListener(chart, 'select', selectHandler);
				chart.draw(data, options);
					
				google.visualization.events.addListener(table, 'select', function() {
					//	var row = table.getSelection()[0].row;
					//	alert('You selected ' + data.getValue(row, 0));
				});
      		}

      		function selectHandler() {
        	//	var selectedItem = chart.getSelection()[0];
        	//	var value = data.getValue(selectedItem.row, 0);
        		// alert('The user selected ' + value);
      		}
	//]]>  
	</script>
  </body>
</html>