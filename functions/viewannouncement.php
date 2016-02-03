<?php
function viewannouncement(){
	global $database;
	
	if($database==null)
		connectdb();

	$result = mysqli_query($database, "SELECT * FROM announcement");
	return $result;
}
?>