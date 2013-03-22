<!DOCTYPE html> 
	
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="static/css/style.css" media="screen" />
	<link rel="stylesheet" href="static/css/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="static/css/projects-style.css" media="screen" />
	
	<meta name="description" content="Heather Carmitchel's course projects" />
	<meta name="keywords" content="Heather Carmitchel" />
	<meta name="author" content="Heather Carmitchel" />
	<meta charset="UTF-8" />
	
    <title>Course Projects | Heather Carmitchel</title>
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

		<div id="navigation" data-spy="affix" data-offset-top="50">
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li id="about"  ><a href="index.php">About</a></li>
							<!--   <li><a href="/templates/posts.html">Blog</a></li>  !--> 
							<li class="dropdown active" id="portfolio">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#portfolio">Portfolio</a>
								<ul class="dropdown-menu" id="portfolioDropdown">
									<li><a href="work-projects.php">Work Projects</a></li>
									<li><a href="course-projects.php" >Course Projects</a></li>
									<li><a href="personal-projects.php" >Personal Projects</a></li>
								</ul>
							</li>
							<li class="dropdown" id="resume">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#resume">R&eacute;sum&eacute;</a>
								<ul class="dropdown-menu" id="resumeDropdown">
									<li><a href="resume.php" >PDF version</a></li>
									<li><a href="resume-online.php" >HTML version</a></li>
								</ul>
							</li>
							<li id="calendar" ><a href="calendar.php">Calendar</a></li>
							<li id="cis598" ><a href="cis598.php">CIS 598</a></li>
							<li id="credit" ><a href="credit.php">Credits</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container" id="page">
		<div class="row">
			<div class="span12">
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#index" data-toggle="tab">Index</a></li>
						<li><a href="#cis450" data-toggle="tab">CIS 450</a></li>
						<li><a href="#cis501" data-toggle="tab">CIS 501</a></li>
						<li><a href="#cis520" data-toggle="tab">CIS 520</a></li>
						<li><a href="#cis526" data-toggle="tab">CIS 526</a></li>
						<li><a href="#cis560" data-toggle="tab">CIS 560</a></li>
						<li><a href="#math551" data-toggle="tab">MATH 551</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="index">
							<br>
							<h1>Courses & Projects</h1>
							<hr class="high"/>
							<p>I have compiled several sample projects from my education 
							at K-State to give an idea of the kind of programming I am 
							familiar with and what my code looks like. You can also find 
							code I've written at my 
							<a href="https://github.com/hCarmitchel" target="_blank">Github account</a>.</p>
							<br/>
							<br/>
							The courses I currently host projects for are:
							<table class="table table-striped table-hover">
								<thead>
									<th>Course number</th>
									<th>Course title</th>
									<th>Term taken</th>
								</thead>
								<tbody>
									<tr><td>CIS 450</td><td>Computer Architecture/Operations</td><td>Spring 2012</td></tr>
									<tr><td>CIS 501</td><td>Software Architecture and Design</td><td>Fall 2011</td></tr>
									<tr><td>CIS 520</td><td>Operating Systems I</td><td>Fall 2012</td></tr>
									<tr><td>CIS 526</td><td>Web Interface Design</td><td>Spring 2012</td></tr>
									<tr><td>CIS 560</td><td>Database System Concepts</td><td>Fall 2012</td></tr>
									<tr><td>MATH 551</td><td>Applied Matrix Theory</td><td>Spring 2012</td></tr>
								</tbody>
							</table>
							<br>
						</div>
						<div class="tab-pane" id="cis450">
							<br>
							<h1>Computer Architecture/Operations</h1>
							<hr class="high"/>
							<p>Introduction to modern computer architectures: register transfer abstraction, 
							addressing modes, basic operations (data transfer, arithmetic/logic, and control 
							operations). Basic Operating System concepts and operations. Understanding 
							relationships of higher-level language constructs to corresponding assembly 
							instruction sequences generated by compilers. Introduction to interrupts and 
							low-level I/O operations.</p>
							<br>
							<div class="row">
								<div class="span5">
									<h2>Project: Parallel Programming in MPI</h2>
									<hr class="high"/>
									<a href="https://dl.dropbox.com/s/axvf03grzmqhapf/Project6.pdf?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Report</button></a> 
									<a href="https://dl.dropbox.com/s/fynugz2io8efpoc/mpi.c?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Project</button></a> 
									<h6>Description</h6>
									<p>Analyze 1mb, 1gb, and 7gb files of raw dna strings.</p>
									<h6>Partner(s)</h6>
									<p>Robert Willard</p>
									<h6>Technologies</h6>
									<p>C</p>
									<br>
								</div>
								<div class="span5">
									<a class="thumbnail" href="static/img/beocat.jpg" style="margin-bottom:15px" title="K-State's Beocat, a supercomputer"><img src="static/img/beocat.jpg"  alt="Beocat" /></a>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="cis501">
							<br>
							<h1>Software Architecture and Design</h1>
							<hr class="high"/>
							<p>Fundamental principles and best practices of 
							interface design, web service design, advanced 
							web interfaces, web development frameworks, 
							web standards and accessibility issues.</p>
							<p>This class mainly focused on design principles and personal 
							project feedback. We went through a shortened development cycle 
							for each project: taking requirements, creating class diagrams, 
							meeting with the professor (<a href="http://people.cis.ksu.edu/~masaaki/" target="_blank">Masaaki Mizuno</a>), 
							coding it, then meeting with the professor again to review the design and code quality.</p>
							<br>
							<div class="row">
								<div class="span6">
									<h2>Project: Blackjack</h2>
									<hr class="high"/>
									<a href="https://dl.dropbox.com/s/fynugz2io8efpoc/mpi.c?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Project</button></a> 
									<h6>Description</h6>
									<p>Create a console application to simulate blackjack.</p>
									<h6>Partner(s)</h6>
									<p>None</p>
									<h6>Technologies</h6>
									<p>Visual Studio, StarUML<br>
									C#</p>
								</div>
								<div class="span4" style="margin-bottom:10px; margin-left:40px;">
									<a class="thumbnail" data-fancybox-group="cis501" href="static/img/blackjack1.png" title="Blackjack Console"><img src="static/img/blackjack1.png"  alt="Blackjack Console" /></a>
								</div>
							</div>
							<div class="row">
								<div class="span6">
									<h2>Project: Vending Machine</h2>
									<hr class="high"/>
									<a href="https://dl.dropbox.com/s/fynugz2io8efpoc/mpi.c?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Project</button></a> 
									<h6>Description</h6>
									<p>Design and build a vending machine GUI.</p>
									<h6>Partner(s)/Acknowledgements</h6>
									<p>As you can see in the code, this project's code was written on top of <a href="http://people.cis.ksu.edu/~masaaki/" target="_blank">Masaaki Mizuno's</a> base program structure.</p>
									<h6>Technologies</h6>
									<p>Visual Studio, StarUML<br>
									C#</p>
								</div>
								<div class="span4" style="margin-bottom:10px; margin-left:40px;">
									<a class="thumbnail" data-fancybox-group="cis501" href="static/img/vendingmachine1.png" title="Vending Machine"><img src="static/img/vendingmachine1.png"  alt="Vending Machine" /></a>
								</div>
							</div>
							<div class="row">
								<div class="span6">
									<h2>Project: DMV</h2>
									<hr class="high"/>
									<a href="https://dl.dropbox.com/s/fynugz2io8efpoc/mpi.c?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Project</button></a> 
									<h6>Description</h6>
									<p>Design and build a registration system application that takes in and stores user input about cars and drivers.</p>
									<h6>Partner(s)/Acknowledgements</h6>
									<p>As you can see in the code, this project's code was written on top of <a href="http://people.cis.ksu.edu/~masaaki/" target="_blank">Masaaki Mizuno's</a> base program structure.</p>
									<h6>Technologies</h6>
									<p>Visual Studio, StarUML<br>
									C#</p>
								</div>
								<div class="span4" style="margin-left:40px;">
									<a class="thumbnail" data-fancybox-group="cis501" href="static/img/vehicleregistrationsystem.png" title="Vehicle registration system"><img src="static/img/vehicleregistrationsystem.png"  alt="Vending Machine" /></a>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="cis520">
							<br>
							<h1>Operating Systems I</h1>
							<hr class="high"/>
							<p>Operating systems concepts, services, and implementation: interrupt processing, processes, 
							concurrency, deadlocks, resource scheduling and system structure; resource management: real 
							and virtual storage, input/output systems, disk scheduling and file systems; design and construction of concurrent programs.</p>
							<br>
							<h2>Project: Pintos</h2>
							<hr class="high"/>
						<!--	<div class="btn-group">
								<a class="btn dropdown-toggle btn-mini btn-primary" data-toggle="dropdown" href="#">
									<i class="icon-download-alt icon-white">&nbsp;</i>Download
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<a href="https://dl.dropbox.com/s/axvf03grzmqhapf/Project6.pdf?dl=1">Download All</a> 
									<a href="https://dl.dropbox.com/s/axvf03grzmqhapf/Project6.pdf?dl=1">Download Report 1</a> 
									<a href="https://dl.dropbox.com/s/fynugz2io8efpoc/mpi.c?dl=1">Download Project 1</a> 
									<a href="https://dl.dropbox.com/s/axvf03grzmqhapf/Project6.pdf?dl=1">Download Report 2</a> 
									<a href="https://dl.dropbox.com/s/fynugz2io8efpoc/mpi.c?dl=1">Download Project 2</button></a> 
								</ul>
							</div> !-->
							<h6>Description</h6>
							<p>Add functionality to <a href="http://www.stanford.edu/class/cs140/projects/pintos/pintos.html">Pintos</a>, an instructional operating system. This was split into two projects. Project 1
							was to add an alarm clock and priority scheduler. Project 2 was to implement argument passing and add system calls.</p>
							<h6>Partner(s)</h6>
							<p>Taylor Collins<br>
							Cole Cooper</p>
							<h6>Technologies</h6>
							<p>C<br>
							Linux</p>
							<br>
							<h2>Project: Android OS & Ball Maze</h2>
							<hr class="high"/>
						<!--	<a href="https://dl.dropbox.com/s/axvf03grzmqhapf/Project6.pdf?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Report</button></a> 
							<a href="https://dl.dropbox.com/s/fynugz2io8efpoc/mpi.c?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Project</button></a> !-->
							<h6>Description</h6>
							<p>Add functionality (system calls) to Android OS and create a ball maze as a tablet app.</p>
							<h6>Partner(s)</h6>
							<p>Taylor Collins<br>
							Cole Cooper</p>
							<h6>Technologies</h6>
							<p>Java<br>
							Eclipse<br>
							Android SDK</p>
							<br>
						</div>
						<div class="tab-pane" id="cis526">
							<br>
							<h1>Web Interface Design</h1>
							<hr class="high"/>
							<p>Fundamental principles and best practices of 
							interface design, web service design, advanced 
							web interfaces, web development frameworks, 
							web standards and accessibility issues.</p>
							<br>
							<div class="row">
								<div class="span5" style="width:345px">
									<h2>Project: Career & Employment Website</h2>
									<hr class="high"/>
									<button class="btn btn-mini btn-primary" style="margin-bottom: 5px;"><i class="icon-download-alt icon-white">&nbsp;</i>&nbsp;Download Project</button> 
									<h6>Description</h6>
									<p>Create a website where job seekers in the computing industy can
									quickly find jobs relevant to their skills.</p>
									<h6>Partner(s)</h6>
									<p>Eddie Hedges<br>
									Devin Castor</p>
									<h6>Technologies</h6>
									<p>Visual Studio<br>
									C#, CSS, HTML, JavaScript, jQuery<br>
									<a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter's Bootstrap 2.0</a></p><br>
								</div>
								<div class="span5" style="width:565px; margin-left:40px;">
									<div id="myCarousel" class="carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<a data-fancybox-group="cis526" class="thumbnail" href="static/img/CES_website_CIS526_1.png" title="Advanced Resume Form"><img src="static/img/CES_website_CIS526_1.png" alt="Advanced Resume Form" /></a>
											</div>
											<div class="item">
												<a data-fancybox-group="cis526" class="thumbnail" href="static/img/CES_website_CIS526_2.png" title="Home Page"><img src="static/img/CES_website_CIS526_2.png" alt="Home Page" /></a>
											</div>
											<div class="item">
												<a data-fancybox-group="cis526" class="thumbnail" href="static/img/CES_website_CIS526_3.png" title="Login Form" ><img src="static/img/CES_website_CIS526_3.png" alt="Login Form" /></a>
											</div>
											<div class="item">
												<a data-fancybox-group="cis526" class="thumbnail" href="static/img/CES_website_CIS526_4.png" title="Advanced Job Search"><img src="static/img/CES_website_CIS526_4.png" alt="Advanced Job Search" /></a>
											</div>
										</div>
										<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> 
										<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="cis560">
							<br>
							<h1>Database System Concepts</h1>
							<hr class="high"/>
							<p>Concepts, approaches, and techniques in database management. 
							Representation of information as data, data storage techniques, foundations of logical data 
							models, data retrieval, database design, transaction management, integrity and security.</p>
							<br>
							<div class="row">
								<div class="span4" style="width:345px">
									<h2>Project: Political Donation Map</h2>
									<hr class="high"/>
									<div class="btn-group">
										<a class="btn dropdown-toggle btn-mini btn-primary" data-toggle="dropdown" href="#">
											<i class="icon-download-alt icon-white"></i>&nbsp;Download
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="https://dl.dropbox.com/s/4bztijh3e8phha2/cis560_project_all.zip?dl=1">Download All</a></li>
											<li><a href="https://dl.dropbox.com/s/x2xe7o87buwbspu/Final%20Project%20Report-CIS%20560.pdf?dl=1">Download Report</a></li>
											<li><a href="https://dl.dropbox.com/s/60dtyjp9ad4xc4b/cis560_project.zip">Download Project</button></a></li> 
											<li><a href="https://dl.dropbox.com/s/udeakw43p9esai2/Political%20Donations%20Presentation.pptx?dl=1">Download PowerPoint</a></li> 
										</ul>
									</div>
									<h6>Description</h6>
									<p>Create a web application with a database that meets certain design and functionality requirements. For our project, we wanted to use a NoSQL database and focus
									on something current that had a lot of data.</p>
									<p>We chose to look at political donations for the 2012 presidential election for Barack Obama. 
									The website was hosted on the cis webpage, but MongoDB has since been uninstalled so it is no longer functional.</p>
									<h6>Partner(s)</h6>
									<p>Robert Willard</p>
									<h6>Technologies</h6>
									<p>PHP<br>
									JavaScript<br>
									<a href="https://developers.google.com/chart/interactive/docs/reference" target="_blank">Google Visualizations</a><br>
									<a href="http://www.mongodb.org/" target="_blank">MongoDB</a></p>
									<br>
								</div>
								<div class="span5" style="width:565px; margin-left:40px;">
									<div id="cis560Carousel" class="carousel slide">
										<div class="carousel-inner">
											<div class="active item">
												<a data-fancybox-group="cis560" class="thumbnail" href="static/img/PoliticalDonationsWebsite.png" title="Political donations map"><img src="static/img/PoliticalDonationsWebsite.png" alt="Political donations map" /></a>
											</div>
											<div class="item">
												<a data-fancybox-group="cis560" class="thumbnail" href="static/img/PoliticalDonationsRockMongo.png" title="RockMongo view of the project's database"><img src="static/img/PoliticalDonationsRockMongo.png" alt="RockMongo view of the project's database" /></a>
											</div>
											<div class="item">
												<a data-fancybox-group="cis560" class="thumbnail" href="static/img/cis560-presentation.jpg" title="Project presentation" ><img src="static/img/cis560-presentation.jpg" alt="Project presentation" /></a>
											</div>
										</div>
										<a class="carousel-control left" href="#cis560Carousel" data-slide="prev">&lsaquo;</a> 
										<a class="carousel-control right" href="#cis560Carousel" data-slide="next">&rsaquo;</a>
									</div>
									<iframe src="https://docs.google.com/presentation/d/1p8Ss8RFwBlcLSXfJrO_yMEunM3zEQg1-XIDKeuOIRXc/embed?start=false&amp;loop=false&amp;delayms=3000" width="440" height="349"></iframe>
								</div>
							</div>
						</div>
					<div class="tab-pane" id="math551" style="">
						<br>
						<h1>Applied Matrix Theory</h1>
						<hr class="high"/>
						<p>Matrix algebra, solutions to systems of linear equations, 
						determinants, vector spaces, linear transformations, 
						eigenvalues, linear programming, approximation techniques.</p>
						<br>
						<h2>Labs</h2>
						<hr class="high"/>
						<div class="row">
							<div class="span3">
							<p>Here you can download .zip files of some of my labs. We used <a href="http://www.mathworks.com/products/matlab/" target="_blank">MATLAB</a> for these.</p>
							</div>
							<div class="span2">
								<ul class="downloads">
									<li><a href="https://dl.dropbox.com/s/st9jidx5cuf81f8/allLabs.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Download All</button></a></li>
									<li><a href="https://dl.dropbox.com/s/j03k2qxr80vx45o/lab4.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 4</button></a></li>
									<li><a href="https://dl.dropbox.com/s/jsvmcamtqg9jyvn/lab5.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 5</button></a></li>
								</ul>
							</div>
							<div class="span2">
								<ul class="downloads">
									<li><a href="https://dl.dropbox.com/s/mxk5zvfdbag9b5x/lab6.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 6</button></a></li>
									<li><a href="https://dl.dropbox.com/s/mxk5zvfdbag9b5x/lab7.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 7</button></a></li>
									<li><a href="https://dl.dropbox.com/s/mxk5zvfdbag9b5x/lab8.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 8</button></a></li>
								</ul>
							</div>
							<div class="span2">
								<ul class="downloads">
									<li><a href="https://dl.dropbox.com/s/mxk5zvfdbag9b5x/lab9.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 9</button></a></li>
									<li><a href="https://dl.dropbox.com/s/mxk5zvfdbag9b5x/lab10.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 10</button></a></li>
									<li><a href="https://dl.dropbox.com/s/52pej1oqdeb81k2/lab12.zip?dl=1"><button class="btn btn-mini btn-primary" style="margin-bottom: 5px; width:110px" ><i class="icon-download-alt icon-white"></i>&nbsp;Lab 12</button></a></li>
								</ul>
							</div>
						</div>
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
							<li><a href="http://www.facebook.com/hcarmitchel" target="_blank" class="links"><img class="ico" height="24" width="24"  src="static/img/stackoverflow.png" alt="Facebook" />&nbsp;&nbsp;&nbsp;Stack Overflow</a></li>
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
	
	<script type="text/javascript" src="static/js/jquery.fancybox.pack.js"></script>
	
	
    <script type="text/javascript">
    //<![CDATA[
	  $(document).ready(function(){
			$('.links').tooltip({placement: "bottom"});
			$("#back-top").hide();
			$('.navbar li.dropdown').hover(
				function(){
					$(this).addClass('open').find('ul').stop(true,true).hide().fadeIn('500');
					if (!($(this).attr('id') == 'portfolio')) $(this).addClass('active');
				},
				function(){
					if (!($(this).attr('id') == 'portfolio')) $(this).removeClass('active');
					$(this).removeClass('open').find('ul').stop(true,true).fadeOut('2000');
				}
			);
			$('.navbar li.dropdown li').unbind('mouseover').unbind('mouseout');
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
						
			$("a[href$='.jpg'],a[href$='.png'],a[href$='.gif']").fancybox({
				openEffect	: 'fade',
				closeEffect	: 'fade',
				nextEffect : 'none',
				prevEffect : 'none',
				margin : [20, 0, 20, 0],
				padding: 3,
				helpers : {
					overlay : {
						closeClick : true,
						speedOut   : 200,
						showEarly  : true,
						css        : {}
					},
					title : {
						type : 'float'
					}
				}
			});
			$('a[data-toggle="tab"]').on('shown', function (e) {
				var selector = 'index';
				if($('#index').hasClass('active')) { selector = '#index'; }
				if($('#cis526').hasClass('active')) { selector = '#cis526'; }
				if($('#cis450').hasClass('active')) {selector = '#cis450';  }
				if($('#math551').hasClass('active')) {selector = '#math551'; }
				if($('#cis501').hasClass('active')) {selector = '#cis501'; }
				if($('#cis520').hasClass('active')) {selector = '#cis520'; }
				if($('#cis560').hasClass('active')) {selector = '#cis560'; }
			//	$('#page').css('height', $(selector).height()+150);
			});
		}); 
	//]]>  
	</script>
  </body>
</html>