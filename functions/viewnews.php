<?php
function viewnews(){
	global $database;
	
	if($database==null)
		connectdb();

	$result = mysqli_query($database, "SELECT * FROM news");
	return $result;
}
?>