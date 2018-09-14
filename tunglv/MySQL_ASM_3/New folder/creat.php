<?php 
	if (isset($_POST['submit'])) {
		// $user_id = $_GET['id'];
		$user_name = $_POST['user_name'];
		$user_fullname = $_POST['user_fullname'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];

		$mysqli = new mysqli("localhost","root",'','ma_sinh_vien');
		$mysqli->set_charset('utf8');
		if($mysqli->connect_errno){
			echo 'sai' .$mysqli->error;
		}
		$sql = "INSERT INTO lms_users(user_name, user_fullname,user_email,user_password) VALUES  ('$user_name','$user_fullname', '$user_email','$user_password')";
		$re = $mysqli->query($sql);
		
	}
	
	// echo "<pre>";
	// print_r($re);
	// echo "</pre>";
	// header('location:index.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 		Name<br> <input type="text" name="user_name"><br>
 		Full_Name<br> <input type="text" name="user_fullname"><br>
 		Email<br> <input type="text" name="user_email"><br>
 		Password<br> <input type="text" name="user_password"><br><br>
 		<input type="submit" name="submit" value="Submit"><br>
 	</form>
 </body>
 </html>