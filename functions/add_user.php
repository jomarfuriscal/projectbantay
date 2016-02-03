<?php
include ('../connect.php');
function add_user($uname,$pword,$email,$fname,$role){
	global $database;
	if($database==null)
		connectdb();	
	$result = mysqli_query($database, "SELECT * FROM user WHERE username='$uname'");
	if (mysqli_num_rows($result) > 0) {
		echo "User already exists.";
	}else{
		$sql="INSERT INTO user (username,password,email,name,role) VALUES ('".$uname."','".md5($pword)."','".$email."','".$fname."','".$role."')";
		if (mysqli_query($database, $sql)) {
			$last_id = mysqli_insert_id($database);
			echo "New record created successfully. Last inserted ID is: " . $last_id;
//			mysqli_close($database);
			return $last_id;
		} else {
			echo "Error: " . mysqli_error($database);
//			mysqli_close($database);
		}
	}
}
function cand_prof($id,$fname,$bdate,$pos,$posrun,$prov,$city){
	global $database;
	if($database==null)
		connectdb();	

	$sql="INSERT INTO candidate_profile(user_fk,name,birthday,province,city,current_position,position_running) VALUES ('".$id."','".$fname."','".$bdate."','".$prov."','".$city."','".$pos."','".$posrun."')";
	var_dump($sql);
	mysqli_query($database, $sql) or die("Error: " . mysqli_error($database));
//	mysqli_close($database);
}
if(!empty($_POST['uname'])&&!empty($_POST['pword'])&&!empty($_POST['email'])&&!empty($_POST['fname'])&&!empty($_POST['role'])){
	if($_POST['role']==='admin'||$_POST['role']==='candidate'||$_POST['role']==='comelec'){
		$id=add_user($_POST['uname'],$_POST['pword'],$_POST['email'],$_POST['fname'],$_POST['role']);
		if(isset($id)&&!empty($id))
			if($_POST['role']==='candidate'){ 
				cand_prof($id,$_POST['fname'],$_POST['bdate'],$_POST['position'],$_POST['prunning'],$_POST['province'],$_POST['city']);
			}
	}
	mysqli_close($database);
}
?>