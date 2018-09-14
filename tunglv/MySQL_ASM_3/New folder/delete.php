<?php
	if (isset($_GET['id'])) {
		$user_id=$_GET['id'];
		$mysqli = new mysqli("localhost","root",'','ma_sinh_vien');
		$mysqli->set_charset('utf8');
		if($mysqli->connect_errno){
			echo 'sai' .$mysqli->error;
		}
		$sql = "DELETE FROM lms_users WHERE user_id = '$user_id'";
		$re = $mysqli->query($sql);
	}
	header('location:index.php');
		
?>
	