<?php 
	if (isset($_POST['submit'])) {
		$user_id = $_GET['id'];
		$user_name = $_POST['user_name'];
		$user_fullname = $_POST['user_fullname'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		
		$mysql = new mysqli('localhost','root','','ma_sinhvien');
		if ($mysql->connect_errno) {

			echo "Can't connect to mysql".$mysql->error;
		}; 
			$mysql->set_charset('utf8');
			$sqli = "UPDATE`lms_users` SET user_name='$user_name',user_fullname='$user_fullname',user_email='$user_email',user_password='$user_password'  WHERE user_id='$user_id' ";
			$res = $mysql->query($sqli);
			// $ro = $res->fetch_assoc();
			// echo '<pre>';
			// print_r($ro);
		 // 	echo '</pre>';
		 header('location:http://localhost:81/FTWD1801.PHPWEB/nampt/mysql-asm-3/index.php');
	} 
		
		
 ?>