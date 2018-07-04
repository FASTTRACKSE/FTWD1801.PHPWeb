
<form action="" method="POST" enctype="multipart/form-data">

	 <input type="file" name="hinhanh">
	<input type="submit" value="gui" name="submit">

</form>
<?php 
	if(isset($_POST['submit'])){
		//Lấy thông tin file
		$name=$_FILES['hinhanh']['name'];
		$arName= explode('.',$name);
		$duoi_file= end($arName);
		$new_name = 'lamnt'.time().".".$duoi_file;
		$tmp_name=$_FILES['hinhanh']['tmp_name'];

		//Lấy đường dẫn gốc của dự án
		$part_root=$_SERVER['DOCUMENT_ROOT'];//E:/xampp/htdocs

		//Tạo đường dẫn thư mục file đầy đủ
		$full_part= $part_root.'/FTWD1801.PHPWEB/lamnt/php_day3/images/'.$new_name;

		//Di chuyển file từ thư mục ảo sang thư mục gốc
		move_uploaded_file($tmp_name,$full_part );
	}
?>
<?php 
	function tongHaiSo($a,$b){
		return $a+$b;
	}

	echo tongHaiSo(111,12314);
?>
