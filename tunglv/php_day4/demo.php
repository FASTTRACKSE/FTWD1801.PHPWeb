<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="hinhanh">
	<input type="submit" value="gui" name="submit">
</form>
<?php 
	// echo "<pre>";
	// print_r($_FILES);
	// echo "</pre>";
	// echo $_SERVER['DOCUMENT_ROOT'];
	if(isset($_POST['submit'])){

		// lay thong tin tu file
		$name=$_FILES['hinhanh']['name'];
		$tmp_name=$_FILES['hinhanh']['tmp_name'];

		//lay duong dan goc cua du an
		$part_root=$_SERVER['DOCUMENT_ROOT'];

		//tao duong dan tu thu muc lay file day du
		$full_part=$part_root. '/FTWD1801.PHPWeb/tunglv/php_day4/images/'.$name;

		//di chuyen file tu thu muc ao sang thu muc goc
		move_uploaded_file($tmp_name, $full_part);
	}	
?> 