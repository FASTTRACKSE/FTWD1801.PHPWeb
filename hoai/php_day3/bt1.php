<!DOCTYPE html >
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
		echo "xin chao".$_GET['firstname']."".$_GET['lastname'];
	}
	?>
<form action="bt1.php" method="GET">
	First name:<br>
	<input type="text" name="firstname" value="">
	<br>
	Last name:<br>
	<input type="text" name="lastname" value="">
	<br><br>
	<input type="submit" value="submit">
</form>
</body>
</html>