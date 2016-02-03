<?php
function viewuser(){
	global $database;
	
	if($database==null)
		connectdb();

	$result = mysqli_query($database, "SELECT * FROM user order by role");
//	$result = mysqli_query($database, "SELECT * FROM user WHERE role NOT IN ('admin')");
//	$result = $database->query("SELECT * FROM user");
	return $result;
}
function viewadmin(){
	global $database;
	
	if($database==null)
		connectdb();

	$result = mysqli_query($database, "SELECT * FROM user WHERE role='admin'");
	return $result;
}
function viewcomelec(){
	global $database;
	
	if($database==null)
		connectdb();

	$result = mysqli_query($database, "SELECT * FROM user WHERE role='comelec'");
	return $result;
}
function viewcandidate(){
	global $database;
	
	if($database==null)
		connectdb();

	$result = mysqli_query($database, "SELECT * FROM user WHERE role='candidate'");
	return $result;
}
?>