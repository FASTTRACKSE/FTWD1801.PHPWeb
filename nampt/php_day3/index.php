<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="hinhanh">
		<input type="submit" value="gui" name="submit">
	</form>
</body>
<?php 
	echo '</pre>';
	print_r($_FILES);
	echo '</pre>';
	echo $_SERVER['DOCUMENT_ROOT'];
	// các bước upload file
	if (isset($_POST['submit'])) {
		// lấy thông tin file
		$name = $_FILES['hinhanh']['name'];
		$tmp_name = $_FILES['hinhanh']['tmp_name'];
		// láy đường dẫn gốc của dự án
		$part_root = $_SERVER['DOCUMENT_ROOT'];
		//tạo đường dân thư mục file đầy đủ

		$full_part = $part_root .'/FTWD1801.PHPWeb/nampt/php_day3/images/'. $name;
		// di chuyển file từ thư mục ảo sang thư mục gốc
		move_uploaded_file($tmp_name, $full_part);
	} 

 ?>
</html>
<?php 
	

 ?>
