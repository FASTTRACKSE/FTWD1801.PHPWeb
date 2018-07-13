<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	if (isset($_POST["r"])) {
		$r=$_POST["r"];
		define("PI",3.14);
		$dt= PI* pow($r,2);
	}

	?>
	<form action="bt2.php" method="post">
		<table>
			<h4>Hình tròn</h4>
			<tr>
				<td><label for="r">
					Bán kính: <input type="text" id="r" name="r" value="<?php echo $_POST["r"]?>">
				</label></td>
			</tr>
			<tr>
				<td><label for="dt">
					Diện tích: <input type="text" id="dt" name="dt" value="<?php echo $dt?>" readonly="true">
				</label></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>