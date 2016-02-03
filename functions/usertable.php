<?php
function printuser($result){
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		echo "<table>";
		echo "<tr><td>ID</td><td>Username</td><td>Email</td><td>Name</td><td>Role</td></tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row['user_id']."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["role"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "Does not have any user.";
	}
}
function printgroup($result){
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		echo "<table>";
		echo "<tr><td>ID</td><td>Group name</td><td>Description</td></tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row['group_id']."</td><td>".$row["name"]."</td><td>".$row["description"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "Does not have any user.";
	}
}
?>