
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2</title>
</head>
<body>
	<fieldset>
		<legend>Hình tròn</legend>
			<form action="bt2.php" method="post">
				Nhập bán kính hình tròn (r) : <input type="number" name="radius">
				<input type="submit"><br>
			</form>

			<?php 
				
				if (isset( $_POST['radius'])) {
					$radius = round($_POST['radius']*$_POST['radius']*pi(),2);
					echo "Diện tích hình tròn là $radius cm<sup>2</sup>";

				} else {
					echo 'Hãy nhập bán kính của bạn vào  ';
				}
			?>
	</fieldset>
</body>
</html>