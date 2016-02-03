<?php
function viewewg(){
	global $database;
	
	if($database==null)
		connectdb();

	$result = mysqli_query($database, "SELECT * FROM watchdog_group");
	return $result;
}
?>