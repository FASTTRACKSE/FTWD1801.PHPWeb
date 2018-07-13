<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 	<?php 
		if (isset($_REQUEST["firstname"]) && isset($_REQUEST["lastname"])) {
		echo "Xin chao ".$_REQUEST["firstname"]." ".$_REQUEST["lastname"];
		}
	?>
	<form action="action_page.php" method="REQUEST">
		First name: <br>
		<input type="text" name="firstname" value="Mickey"><br>
		Last name: <br>
		<input type="text" name="lastname" value="Mouse"><br><br>
		<input type="submit" value="Submit">
	</form> -->
	<?php
		session_start();
		$_SESSION['username']="ffse01";
		$_SESSION['role']="admin";
	?>
</body>
</html>