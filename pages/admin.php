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
			<ul class="nav navbar-nav"><li class="active"><a href="index.php">Home</a></li></ul>
			<form method='post' action='functions/logout.php' class="navbar-form navbar-right">
				<button type="submit" class="btn btn-warning">Sign out</button>
			</form>
			<ul class="nav navbar-nav navbar-right"><li><a href="index.php">Welcome <?php echo $_SESSION['uname'];?></a></li></ul>
		</div><!--/.nav-collapse -->
		
	</nav>
</header>
<script>
	function display(x){
		document.getElementById("0").style.display="none";
		document.getElementById("1").style.display="none";
		document.getElementById("2").style.display="none";
		document.getElementById("3").style.display="none";
		document.getElementById("4").style.display="none";
		document.getElementById("5").style.display="none";
		document.getElementById("6").style.display="none";
		document.getElementById("add0").className="list-group-item";
		document.getElementById("add1").className="list-group-item";
		document.getElementById("add2").className="list-group-item";
		document.getElementById("add3").className="list-group-item";
		document.getElementById("add4").className="list-group-item";
		document.getElementById("add5").className="list-group-item";
		document.getElementById("add6").className="list-group-item";

		document.getElementById(x).style.display="block";
		document.getElementById("add"+x).className="list-group-item active";
	}
</script>
<div class="container theme-showcase" role="main">
<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="col-xs-2 navi">
		<ul style="text-align:center">
		<li><a id='add0' onclick='display(0)' href='#users' class="list-group-item active">Users</a></li>
		<li><a id='add1' onclick='display(1)' href='#add_admin' class="list-group-item">Add Admin</a></li>
		<li><a id='add2' onclick='display(2)' href='#add_comelec'class="list-group-item">Add Comelec</a></li>
		<li><a id='add3' onclick='display(3)' href='#add_candidate'class="list-group-item">Add Candidate</a></li>
		<li><a id='add4' onclick='display(4)' href='#add_group'class="list-group-item">Add Watchdog Group</a></li>
		<li><a id='add5' onclick='display(5)' href='#add_news'class="list-group-item">Add News</a></li>
		<li><a id='add6' onclick='display(6)' href='#add_announcement'class="list-group-item">Add Announcement</a></li>
		</ul>
	</div>
	<div class="col-xs-7">
	<?php
		require_once('connect.php');
		require_once('functions/viewuser.php');
		require_once('functions/viewewg.php');
		require_once('functions/usertable.php');
	?>
		<div id='0'>
			<div>
				<h3>Users</h3>
				<?php $result = viewuser(); printuser($result); ?>
			</div>
		</div>
		<div id='1' style='display:none'>
			<h3>Add Admin</h3>
			<form action='functions/add_user.php' method='post'>
				<input type='text' name='uname' placeholder='username' required/> <br/>
				<input type='password' name='pword' placeholder='password' required/><br/>
				<input type='email'name='email' placeholder='email' required/><br/>
				<input type='text' name='fname' placeholder='fullname' required/><br/>
				<input type='text' name='role' value='admin' style='display:none'/><br/>
				<input type='submit' value='Add'/>
			</form>
			<div>
				<h3>Administrators</h3>
				<?php $result = viewadmin(); printuser($result); ?>
			</div>
		</div>
		<div id='2' style='display:none'>
			<h3>Add Comelec</h3>
			<form action='functions/add_user.php' method='post'>
				<input type='text' name='uname' placeholder='username'/> <br/>
				<input type='password' name='pword' placeholder='password'/><br/>
				<input type='email'name='email' placeholder='email'/><br/>
				<input type='text' name='fname' placeholder='fullname'/><br/>
				<input type='text' name='role' value='comelec' style='display:none'/><br/>
				<input type='submit' value='Add'/>
			</form>
			<div>
				<h3>Comelec Personnels</h3>
				<?php $result = viewcomelec(); printuser($result); ?>
			</div>
		</div>
		<div id='3' style='display:none'>
			<h3>Add Candidate</h3>
			<form action='functions/add_user.php' method='post'>
			<table>
			<tr><td>username:</td><td><input type='text' name='uname' placeholder='username'/></td></tr>
			<tr><td>password:</td><td><input type='text' name='pword' placeholder='password'/></td></tr>
			<tr><td>e-mail:</td><td><input type='email'name='email' placeholder='email'/></td></tr>
			<tr><td>full name:</td><td><input type='text' name='fname' placeholder='fullname'/></td></tr>
			<tr><td>birthday:</td><td><input type='date' name='bdate' /></td></tr>
			<tr><td>current position:</td><td><input type='text' name='position' placeholder='N/A'/></td></tr>
			<tr><td>position running:</td><td><input type='text' name='prunning' placeholder='N/A'/></td></tr>
			<tr><td>province:</td><td><input type='text' name='province' placeholder='province'/></td></tr>
			<tr><td>city:</td><td><input type='text' name='city' placeholder='city'/></td></tr>
			<input type='text' name='role' value='candidate' style='display:none'/><br/>
			</table>
			<input type='submit' value='Add'/>
			</form>
			<div>
				<h3>Candidates</h3>
				<?php $result = viewcandidate(); printuser($result); ?>
			</div>
		</div>
		<div id='4' style='display:none'>
			<h3>Add Election Watchdog Group</h3>
			<form action='functions/add_group.php' method='post'>
				<input type='text' name='gname' placeholder='group name'/> <br/>
				<input type='text' name='desc' placeholder='description'/><br/>
				<input type='button' name='addmember' value='Add member'/><br/>
				<input type='submit' value='Add'/>
			</form>
			<div>
				<h3>Election Watchdog Groups</h3>
				<?php $result = viewewg(); printgroup($result); ?>
			</div>
		</div>
		<div id='5' style='display:none'>
			<h3>Add News</h3>
			<form action='functions/add_admin.php' method='post'>
				<input type='text' name='title' placeholder='title'/> <br/>
				<input type='text' name='desc' placeholder='description'/><br/>
				<input type='submit' value='Add'/>
			</form>
		</div>
		<div id='6' style='display:none'>
			<h3>Add Announcement</h3>
			<form action='functions/add_admin.php' method='post'>
				<input type='text' name='title' placeholder='title'/> <br/>
				<input type='text' name='desc' placeholder='description'/><br/>
				<input type='submit' value='Add'/>
			</form>
		</div>
	</div>
	<div class="col-xs-3 navi">
		<ul>
		<li>Announcements</li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		</ul>
		<ul>
		<li>News Feeds</li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		<li><a>Curabitur blandit tempus porttitor.</a></li>
		</ul>
	</div>
</div>
admin page
<?php
disconnectdb();
echo "<br/>add user";
require('templates/forms/add_user.php');

echo "<br/>delete user";
require('templates/forms/delete_user.php');
?>
<br/>
add news
<br/>
