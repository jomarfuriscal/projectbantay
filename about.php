<?php
$page='';
if (isset($_SESSION['uname'])){
	if($_SESSION['uname']==='candidate') $page='candidate';
	if($_SESSION['uname']==='admin') $page='admin';
	if($_SESSION['uname']==='ewg')  $page='ewg';
	if($_SESSION['uname']==='user')  $page='user';
	$data = 'Home';
}else{
	$data = 'Welcome to Project Bantay';
}

require_once('templates/header.php');

if($page==='candidate') require_once('pages/candidate.php');
else
if($page==='admin')  require_once('pages/admin.php');
else
if($page==='ewg')  require_once('pages/ewg.php');
else
if($page==='user')  require_once('pages/user.php');
else{
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">Project Bantay</a>
</div>
<div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="index.php">Home</a></li>
<li class="active"><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</nav>

<div class="container theme-showcase" role="main">
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron col-xs">
<h1>Project Bantay</h1>
<p>A system for monitoring election-related anomalies.</p>
</div>
</div>
<?php
}
require_once('templates/footer.php');
?>