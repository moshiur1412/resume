<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="content-language" content="nl" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="author" content="Md. Moshiur Rahman" />	
	<meta name="description" content="I'm Md Moshiur Rahman - Full-Stack Developer" />
	<meta name="keywords" content="Moshiur Rahman, PHP, MySQL, OOP" />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="14 days" />

	<title> MD MOSHIUR RAHMAN - Full-Stack Developer</title>

	<!-- Bootstrap core CSS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
	<link href="{{ asset('vorsurm/') }}/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ asset('vorsurm')}}/style.css" rel="stylesheet" />

	<link rel="shortcut icon" href="{{ asset('vorsurm')}}/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="{{ asset('vorsurm')}}/favicon.ico" type="image/x-icon" />

		<!--[if lt IE 9]>
			<script src="{{ asset('vorsurm')}}/js/html5shiv.js"></script>
			<script src="{{ asset('vorsurm')}}/js/respond.min.js"></script>
		<![endif]-->
		
		<!-- Begin Inspectlet Embed Code -->
		<script type="text/javascript" id="inspectletjs">
			window.__insp = window.__insp || [];
			__insp.push(['wid', 92785244]);
			(function() {
				function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://www.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
				if (window.attachEvent){
					window.attachEvent('onload', __ldinsp);
				}else{
					window.addEventListener('load', __ldinsp, false);
				}
			})();
		</script>
		<!-- End Inspectlet Embed Code -->
	</head>
	<body data-spy="scroll" data-target="#navbar-example">	 

		<div id="top" class="jumbotron" data-src="" data-position="">
			<div class="container">
				<h1>Md. Moshiur Rahman</h1>
				<p class="lead">Interactive resume</p>
			</div>
			
			<div class="overlay"></div>
			
			<a href="#profile" class="scroll-down">	
				<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
		</div>
		
		<nav class="navbar navbar-default" id="navbar-example" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#profile">Profile</a></li>
					<li><a href="#experiences">Experiences</a></li>
					<li><a href="#abilities">Abilities</a></li>
					<li><a href="#interests">Interests</a></li>
					<li><a href="#projects">Projects</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<div id="profile" class="container">
				@include('sections.profiles')
			</div>	
		</div>	
		
		<div id="experiences" class="container">
			@include('sections.experiences')
		</div>
		
		<div class="background-white">
			<div id="abilities" class="container">
				@include('sections.abilities')
			</div>
		</div>
		
		
		<div id="interests" class="container">
			@include('sections.interests')
		</div>
		
		<div id="projects" class="container">
			@include('sections.projects')
		</div>
		
		<div class="background-gray">
			<div id="contact" class="container">
				@include('sections.contact')
			</div>
		</div>
		
		<div class="background-gray">
			<div id="upgrade" class="container">
				@include('sections.upgrade')
			</div>
		</div>
		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="{{ asset('vorsurm')}}/js/script.js"></script>
		<script type="text/javascript" src="{{ asset('vorsurm')}}/js/bootstrap.min.js"></script>
		
		<!-- Google Analytics -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-3361587-8']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
	</html>