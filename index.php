<?php
session_start();
$page='';
if (isset($_SESSION['role'])&&!empty($_SESSION['role'])){
	$page = $_SESSION['role'];
	$data = 'Home';
}else{
	$data = 'Welcome to Project Bantay';
}

require_once('templates/header.php');
if($page==='candidate') require_once('pages/candidate.php');
else if($page==='comelec') require_once('pages/comelec.php');
else if($page==='admin')  require_once('pages/admin.php');
else if($page==='user')  require_once('pages/public.php');
else if($page==='ewg')  require_once('pages/ewg.php');
else{
?>
<!-- Fixed navbar -->
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
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</nav>
</header>

<div class="container theme-showcase" role="main">
<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron col-xs-8">
		<h1>Project Bantay</h1>
		<p>A system for monitoring election-related anomalies.</p>
	</div>
	<div id='login' class="jumbotron col-xs-4">
		<?php 
			if (isset ($_GET['set'])) {		// $_GET['set'] acts like a flag
				$error = $_GET['set'];		
				if ($error == 1) {			// if error == 1, prints an error message
					echo "<p style='color:red;font-size:1em'> * Incorrect username or password! </p>";
				}
			}
			include('templates/forms/login.php');
		?>
	</div>

</div>
<script>
</script>
<?php
}
require_once('templates/footer.php');
?>