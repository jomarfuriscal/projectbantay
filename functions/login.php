<?php	
session_start();
require_once('../connect.php');
if (!empty($_POST['name'])&&!empty($_POST['pword'])){
	if($database==null) connectdb();
	$result = mysqli_query($database, "SELECT * FROM user WHERE username='".$_POST['name']."' and password='".md5($_POST['pword'])."'");
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['user_id'];
		$_SESSION['uname'] = $row['username'];
		$_SESSION['role'] = $row['role'];
		disconnectdb();
		header("Location: ../index.php");
	}else{
		disconnectdb();
		header("Location: ../index.php?set=1");	
	}
}
?>