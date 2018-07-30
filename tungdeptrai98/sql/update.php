<?php
$user_id = $_GET['id'];
//echo "$user_id";
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
	$item = $result -> fetch_assoc();
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
<h2>UPDATE USER INFO</h2> 
	Please edit the input values and submit to update the record
	<hr> 
	<form method="post" action="update1.php?id= <?= $user_id?>">
		Name <br><input type="text" class="form-control" value="<?php echo $item['user_name']; ?>" name="Name"> <br>
		Fullname <br><input type="text" class="form-control" name="Fullname" value="<?php echo $item['user_fullname']; ?>"> <br>
		Email <br><input type="email" class="form-control" name="Email" value="<?php echo $item['user_email']; ?>"> <br>
		Password <br><input type="text" class="form-control" name="Password" value="<?php echo $item['user_password']; ?>"> <br> <br>
		<input type="submit" class="btn btn-primary" name="submit">
		<a href="asm8.php" class="btn btn-success center">Back</a>
	</form>
</div>
</body>
</html>