<?php
	if (isset($_GET['id'])) {
		$user_id=$_GET['id'];
		$mysqli = new mysqli("localhost","root",'','ma_sinh_vien');
		$mysqli->set_charset('utf8');
		if($mysqli->connect_errno){
			echo 'sai' .$mysqli->error;
		}
		$sql = "SELECT * FROM lms_users WHERE user_id = '$user_id'";
		$re = $mysqli->query($sql);
	};
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Fullname</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
		<?php  ($item = $re -> fetch_assoc())  ?>
		<tr>
			<td><?= $item['user_id'] ?></td>
				<td><?= $item['user_name'] ?></td>
				<td><?= $item['user_fullname'] ?></td>
				<td><?= $item['user_email'] ?></td>
				<td><?= $item['user_password'] ?></td>
		</tr>
		
	</table>
</body>
</html>