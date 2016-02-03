<?php
	$data='Profile';
	require_once('templates/header.php');
?>
<header class="navbar navbar-inverse navbar-fixed-top">
	<nav class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Project Bantay</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="profile.php">Profile</a></li>
			</ul>
			<form method='post' action='functions/logout.php' class="navbar-form navbar-right">
				<button type="submit" class="btn btn-warning">Sign-out</button>
			</form>
		</div><!--/.nav-collapse -->
		
	</nav>
</header>

<div class="container theme-showcase" role="main">
<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="col-xs-2 navi">
		<p>Navigation</p>
		<ul>
		<li><a>Curabitur</a></li>
		<li><a>blandit</a></li>
		<li><a>tempus</a></li>
		<li><a>porttitor</a></li>
		</ul>
	</div>
	<div class="col-xs-7">
		<h1>Project Bantay</h1>
			<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	</div>
	<div class="col-xs-3 navi">
		<p>Announcements</p>
		<ul>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		</ul>
	</div>
</div>

candidate page
<br/>
profile
<br/>
asked questions
<br/>
answered questions
<br/>
newsfeeds
<br/>

<br/>
<?php require_once('templates/footer.php');?>