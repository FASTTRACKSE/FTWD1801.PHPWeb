	<?php

	//Khởi tạo connection
	$mysqli = new mysqli("localhost","root",'','ma_sinh_vien');
	$mysqli->set_charset('utf8');
	if($mysqli->connect_errno){
		echo 'sai' .$mysqli->error;
	}
	$sql = "SELECT * FROM lms_users";
	$re = $mysqli->query($sql);
	// echo "<pre>";
	// print_r($re);
	// echo "</pre>";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
	<style>
		#container {
			width: 700px;
			margin: 0 auto;
		}
		.a1 {
			padding-left: 220px;
		}
	</style>
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h3>Users List</h3>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 a1">
				<a href="creat.php"><button type="button" class="btn btn-primary">Add New User</button></a>
			</div>
		</div>
		<table class="table table-striped table-bordered">
			<tr>
				<th class="a">ID</th>
				<th>Name</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			<?php while ($item = $re -> fetch_assoc()) { 
				echo "<pre>";
				print_r($re);
				echo "</pre>"; ?>
			<tr>
				<td><?= $item['user_id'] ?></td>
				<td><?= $item['user_name'] ?></td>
				<td><?= $item['user_fullname'] ?></td>
				<td><?= $item['user_email'] ?></td>
				<td><?= $item['user_password'] ?></td>
				<td>
					<a href="read.php?id=<?=$item['user_id']?> ">xem</a>
					<a href="update.php?id=<?= $item['user_id'] ?>">sua</a>
					<a href="delete.php?id=<?=$item['user_id']?>">xoa</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>