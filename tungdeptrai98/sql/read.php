<?php
$user_id = $_GET['id'];
$mysqli = new mysqli('localhost',"root",'','sinhvien');
$mysqli ->  set_charset('utf8');
if ($mysqli->connect_errno){
	echo $mysqli->error;
	exit();
}
else
{
	$sql = "SELECT * FROM lms_users WHERE user_id=$user_id";
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

</head>
<body>
<div class="container" style="border: 1px solid gray; padding: 20px; ">
<h2> VIEW USER INFO </h2> 
<table class="table table-hover" style="border: 1px solid gray">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
		<?php while ($item = $result -> fetch_assoc()) { ?>
		<tr>
			<td><?php echo $item['user_id'] ?></td>
			<td><?php echo $item['user_name'] ?></td>
			<td><?php echo $item['user_fullname'] ?></td>
			<td><?php echo $item['user_email'] ?></td>
			<td><?php echo $item['user_password'] ?></td>
		<?php } ?>
</table>
<a href="asm8.php" class="btn btn-success">Back</a>
</body>
</html>