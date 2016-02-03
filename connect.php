<?php
$database = null;
function connectdb(){
	global $database;
	// Create connection (servername,username,password,dbname)
	$database=new mysqli("localhost","root","","projectbantay");
	// Check connection
	if(!$database) die("Connection failed: ".mysqli_connect_error());
}


function disconnectdb(){
	global $database;
	// Close connection
	$database->close();
}
?>