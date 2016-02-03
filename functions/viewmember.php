<?php
function viewmember($data){
	global $database;
	
	if($database==null)
		connectdb();
	$result = mysqli_query($database, "SELECT * FROM watchdog_member WHERE groupname=".$data);
	return $result;
}
if(isset($_SESSION['ewg']))
	viewmember($_SESSION['ewg']);
//INSERT INTO `projectbantay`.`user` (`user_id`, `username`, `password`, `email`, `facebook_id`, `twitter_id`, `role`, `name`) VALUES (NULL, 'psalmdavid', 'psalm', 'pdcana@gmail.com', NULL, NULL, 'comelec', 'psalm david caña');
?>