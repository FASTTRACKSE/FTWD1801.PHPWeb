<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm thông tin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css"> 
	</style>

</head>
<body>
<div class="container" style="border: 1px solid gray; padding: 20px; ">
<h2>CREATE NEW USER</h2> 
Please fill this form and submit to add a new user record to the database
<hr> 
<form method="post" action="add.php">
Name <br><input type="text" class="form-control" name="Name"> <br>
Fullname <br><input type="text" class="form-control" name="Fullname"> <br>
Email <br><input type="email" class="form-control" name="Email"> <br>
Password <br><input type="password" class="form-control" name="Password"> <br> <br>
<input type="submit" class="btn btn-primary" name="submit">
<a href="asm8.php" class="btn btn-success center">Back</a>
</form>
</div>
</body>
</html>
<?php
$mysqli = new mysqli('localhost',"root",'','sinhvien');
$mysqli ->  set_charset('utf8');
if ($mysqli->connect_errno){
	echo $mysqli->error;
	exit();
}
	if(isset($_POST['submit'])) {
		$name= $_POST['Name'];
		$fullname= $_POST['Fullname'];
		$email= $_POST['Email'];
		$password= $_POST['Password'];

		$query = "INSERT INTO lms_users (user_name,user_fullname,user_email,user_password) VALUES ('$name','$fullname','$email','$password');";
		$result = $mysqli -> query($query);
	}
 ?>