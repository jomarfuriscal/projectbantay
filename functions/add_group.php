<?php
require_once('../connect.php');
function add_group($gname,$desc){
	global $database;
	if($database==null)
		connectdb();
	$result = mysqli_query($database, "SELECT * FROM watchdog_group WHERE name='$gname'");
	if(mysqli_num_rows($result) > 0){
		echo "Group already exists.";
	}else{
		$sql="INSERT INTO watchdog_group (name,description) VALUES ('".$gname."','".$desc."')";
		if (mysqli_query($database, $sql)) {
			$last_id = mysqli_insert_id($database);
			echo "New record created successfully. Last inserted ID is: " . $last_id;
		//	mysqli_close($database);
		} else {
			echo "Error: " . mysqli_error($database);
		}
	}
	
}
if(!empty($_POST['gname']&&!empty($_POST['desc']))){
	add_group($_POST['gname'],$_POST['desc']);
	mysqli_close($database);
}
?>