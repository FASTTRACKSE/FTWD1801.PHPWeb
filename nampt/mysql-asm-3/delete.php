<?php 
	if (isset($_GET['id'])) {

		$user_id = $_GET['id'];
		$mysqli = new mysqli('localhost','root','','ma_sinhvien');
		$mysqli->set_charset('utf8');
		if ($mysqli->connect_errno) {
			echo "Can't connect to mysql".$mysqli->error;
		}else{
			$sql = "DELETE FROM `lms_users` WHERE user_id='$user_id' ";
			$result = $mysqli->query($sql);

		};				
	}else{
		echo 'Không nhận được dữ liệu';
	};

 ?>
<!DOCTYPE html>
<html lang="en"><head>
	<title> Delete </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="js/read.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
 	<link rel="stylesheet" href="css/read.css">
</head>
<body >
	<div class="container">
		<h3 class="display-4 text-xs-center">Bạn đã xóa thành công  </h3>
		<hr>
		
	<a href="index.php" class="btn btn-secondary">Back</a>
	</div><!-- end container -->
</body>
</html>