<?php
$mysqli = new mysqli('localhost',"root",'','sinhvien');
$mysqli ->  set_charset('utf8');
if ($mysqli->connect_errno){
	echo $mysqli->error;
	exit();
}
else
{
	$sql = "SELECT * FROM lms_users";
	$result = $mysqli -> query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sinh viên</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css"> 
	</style>

</head>
<body>
<div class="row">
<div class="col-sm-6"> <h2>USERS LIST</h2> </div>
<div class="col-sm-6"> <a  href="add.php" class="btn btn-success" style="float: right;">Add new user </a> </div>
</div>
<table class="table table-hover" style="border: 1px solid gray">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Password</th>
		<th>Action</th>
	</tr>
		<?php while ($item = $result -> fetch_assoc()) { ?>
		<tr>
			<td><?php echo $item['user_id'] ?></td>
			<td><?php echo $item['user_name'] ?></td>
			<td><?php echo $item['user_fullname'] ?></td>
			<td><?php echo $item['user_email'] ?></td>
			<td><?php echo $item['user_password'] ?></td>
			<td> <a href="read.php?id= <?= $item['user_id']?>"><i class="fa fa-eye"></i> </a>
				 <a href="update.php?id= <?= $item['user_id']?>"><i class="fa fa-pencil"></i> </a>
				 <a href="delete.php?id= <?= $item['user_id']?>"><i class="fa fa-trash"></i> </a>
			</td>
		</tr>
		<?php } ?>
</table>
</body>
</html>