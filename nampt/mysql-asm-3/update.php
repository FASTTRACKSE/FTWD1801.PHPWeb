<?php 
	if (isset($_GET['id'])) {

		$user_id = $_GET['id'];
		$mysqli = new mysqli('localhost','root','','ma_sinhvien');
		$mysqli->set_charset('utf8');
		if ($mysqli->connect_errno) {
			echo "Can't connect to mysql".$mysqli->error;
		}else{
			$sql = "SELECT * FROM `lms_users` WHERE user_id='$user_id' ";
			$result = $mysqli->query($sql);
			$row = $result->fetch_assoc();
		};				
	}else{
		echo 'Không nhận được dữ liệu';
	};
 ?>
<!DOCTYPE html>
<html lang="en"><head>
	<title> Update </title>
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
		<h3 class="display-4 text-xs-center">Update User Info</h3>
		<hr>
		<form action="do_update.php?id=<?= $row['user_id'] ?>" method="post">
				
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Name</label>
					<input type="text" class="form-control"  name="user_name" required value="<?= $row['user_name'] ?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Full name</label>
					<input type="text" class="form-control" name="user_fullname" required value="<?= $row['user_fullname'] ?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Email</label>
					<input type="text" class="form-control" name="user_email" required value="<?= $row['user_email'] ?>">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Password</label>
					<input type="text" class="form-control" name="user_password" required value="<?= $row['user_password'] ?>">
				</fieldset>
			
			
			<a href="do_update.php?id=<?= $row['user_id'] ?>">
				<input type="submit" class="btn btn-primary" value="Update" name="submit">
			</a>
			<a href="index.php" class="btn btn-danger text-xs-center">Back</a>
		</form><!-- end form -->
	</div>
</body>
</html>

