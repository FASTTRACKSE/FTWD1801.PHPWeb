<?php 
	if (isset($_POST['submit'])) {
		$user_id = $_GET['id'];
		$user_name = $_POST['user_name'];
		$user_fullname = $_POST['user_fullname'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];

		$mysqli = new mysqli("localhost","root",'','ma_sinh_vien');
		$mysqli->set_charset('utf8');
		if($mysqli->connect_errno){
			echo 'sai' .$mysqli->error;
		}
		$sql = "UPDATE  lms_users SET  user_name='$user_name',user_fullname='$user_fullname', user_email='$user_email',user_password='$user_password' WHERE user_id='$user_id'";
		$item= $mysqli->query($sql);
		header("location:index.php");
	}
?>