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

	<div class="background-green">
		<div id="contact" class="container">
			@include('sections.contact')
		</div>
	</div>



	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('vorsurm')}}/js/script.js"></script>
	<script type="text/javascript" src="{{ asset('vorsurm')}}/js/bootstrap.min.js"></script>

</body>
</html>