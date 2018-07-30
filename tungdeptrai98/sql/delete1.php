<?php
$user_id = $_GET['id'];
$mysqli = new mysqli('localhost',"root",'','sinhvien');
$mysqli ->  set_charset('utf8');
if ($mysqli->connect_errno){
	echo $mysqli->error;
	exit();
}
else
{
	$sql = "DELETE FROM lms_users WHERE user_id='$user_id'";
	$result = $mysqli -> query($sql);
	header('location:asm8.php');
}
?>
