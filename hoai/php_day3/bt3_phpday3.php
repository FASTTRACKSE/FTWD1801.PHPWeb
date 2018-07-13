<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 3</title>
</head>
<body>
			<form action="bt3.php" method="post">
			<textarea rows="4" cols="80" name="user">
				Tôi yêu Fasttrack SE
			</textarea><br><br>
			Từ gốc : <input type="text" name="pass">
			thay thế bằng : <input type="text" name="thayThe">
			<input type="submit" value="thực hiện">
		</form>
		<?php 
			$pass = $_POST['pass'];			
			$thayThe = $_POST['thayThe'];
			$user = "$pass yêu Fasttrack SE";				
			echo str_replace($pass, $thayThe,$user);			
		 ?>
</body>
</html