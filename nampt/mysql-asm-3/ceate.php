
<!DOCTYPE html>
<html lang="en"><head>
	<title> Create </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="js/create.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
 	<link rel="stylesheet" href="css/create.css">
</head>
<body >
	<div class="container">
		<h3 class="display-4 text-xs-center">Create New User </h3>
		<hr>
		<form action="ceate.php" method="post">
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Name</label>
				<input type="text" class="form-control" id="Input" name="user_name" required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Full name</label>
				<input type="text" class="form-control" id="Input2" name="user_fullname" required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Email</label>
				<input type="text" class="form-control" id="Input2" name="user_email" required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Password</label>
				<input type="password" class="form-control" id="Input2" name="user_password" required>
			</fieldset>
			<input type="submit" class="btn btn-primary" value="Submit" name="submit">
			<a href="index.php" class="btn btn-danger text-xs-center">Back</a>
		</form><!-- end form -->
	</div>
</body>
</html>
<?php 
	if (isset($_POST['submit'])) {
		$user_name = $_POST['user_name'];
		$user_fullname = $_POST['user_fullname'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		
		$mysqli = new mysqli('localhost','root','','ma_sinhvien');
		if ($mysqli->connect_errno) {

			echo "Can't connect to mysql".$mysqli->error;
		}; 
			$mysqli->set_charset('utf8');
			$sql = "INSERT INTO`lms_users`(user_name,user_fullname,user_email,user_password) VALUES('$user_name','$user_fullname','$user_email','$user_password')";
			$result = $mysqli->query($sql);
			//$row = $result->fetch_assoc();
			// echo '<pre>';
			//print_r($result);
		 	//echo '</pre>';
		 header('location:http://localhost:81/FTWD1801.PHPWEB/nampt/mysql-asm-3/index.php');
	} 
		
		
 ?>