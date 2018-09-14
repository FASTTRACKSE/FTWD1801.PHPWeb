<?php 
if (isset($_GET['id'])) {
		$user_id=$_GET['id'];
		$mysqli = new mysqli("localhost","root",'','ma_sinh_vien');
		$mysqli->set_charset('utf8');
		if($mysqli->connect_errno){
			echo 'sai' .$mysqli->error;
		}else{
		$sql = "SELECT * FROM lms_users WHERE user_id= '$user_id'";
		$re = $mysqli->query($sql);
		$item = $re -> fetch_assoc();
		 // echo "<pre>";
		 // print_r($item);
		 // echo "</per>";
	};
}else{
	echo 'khong nhap dc';
};
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
	<form action="do_update.php?id=<?= $item['user_id'] ?>" method="post">
		Name <br><input type="text" name= "user_name" required value="<?= $item['user_name']?>"><br>

		Fullname <br> <input type="text" name="user_fullname" required value="<?= $item['user_fullname'] ?>"><br>

		Email <br> <input type="text" name="user_email" required value="<?= $item['user_email']?>"><br>

		Password <br> <input type="text" name="user_password" required value="<?=$item['user_password']?>"><br>

		<input type="submit" name="submit" value="Update">

		<a href="index.php"><input type="submit" name="submit" value="Back"></a>
	</form>
 </body>
 </html>
 