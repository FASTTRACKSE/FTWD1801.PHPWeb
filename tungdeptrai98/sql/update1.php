<?php 
$id = $_GET['id'];
$mysqli = new mysqli('localhost',"root",'','sinhvien');
$user_name = $_POST['Name'];
$user_fullname = $_POST['Fullname'];
$user_email= $_POST['Email'];
$user_password= $_POST['Password'];
$mysqli ->  set_charset('utf8');
if ($mysqli->connect_errno){
	echo $mysqli->error;
	exit();
} 
else 
{
	$sql = "UPDATE lms_users SET user_name = '$user_name',user_fullname = '$user_fullname',user_email = '$user_email',user_password = '$user_password' WHERE user_id='$id'";
	$result = $mysqli -> query($sql);
	header('location:asm8.php');
}
?>