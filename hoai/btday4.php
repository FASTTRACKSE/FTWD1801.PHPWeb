<?php session_start() ?>

<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;	
	    
	}
	td, th {
	    border: 1px solid black;
	    
	}
	fieldset {
		width: 700px;
		margin-left: 200px;
	}
	img {
		width: 250px;
		height: 150px;
	    margin-left: 250px;
	}
</style>
<fieldset>
		<legend><strong>Đăng ký tài khoản</strong></legend>
<form action="btday4.php" method="post" id="form" enctype="multipart/form-data"> 
	<table>
		<tr>
			<td>Tên đăng nhập(*):</td>
			<td><input type="text" name="ten"></td>
		</tr>
		<tr>
			<td>Mật khẩu(*) :</td>
			<td><input type="password" name="matkhau"></td>
		</tr>
		<tr>
			<td>Họ và tên(*) :</td>
			<td><input type="text" name="hovaten"></td>
		</tr>
		<tr>
			<td>Ảnh đại diện (*)</td>
			<td><input type="file" name="hinhanh" required></td>
		</tr>
		<tr>
			<td>Địa chỉ : </td>
			<td><input type="text" name="diachi"></td>
		</tr>
		<tr>
			<td>Giới tính:</td>
			<td>
			<input type="radio" name="gender" value="Nam">Nam<br>
			<input type="radio" name="gender" value="Nữ">Nữ
			</td>
		</tr>
		<tr>
			<td>Sở thích:</td>
			<td>
		    	<input type="checkbox" name="hobby" value="xem phim">Xem phim<br>
		    	<input type="checkbox" name="hobby" value="nghe nhạc">Nghe nhạc<br>
		    	<input type="checkbox" name="hobby" value="Đọc báo">Đọc báo<br>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="xacnhan" value="Xác nhận">
				<input type="submit" name="huybo" value="Hủy bỏ">
			</td>
		</tr>
	</table>
</form>
</fieldset>
<?php
		$tendangnhap=$_POST['ten'];
		$pass=$_POST['matkhau'];
		$hoten=$_POST['hovaten'];
		$img=$_FILES['hinhanh'];
		$diachi=$_POST['diachi'];
		$gender = $_POST['gender'];
		$hobby =$_POST['hobby']; 

		if(isset($_POST['xacnhan'])) {
			// lấy thông tin file
			$img_name = $_FILES['hinhanh']['name'];
			$tmp_name = $_FILES['hinhanh']['tmp_name'];
			// láy đường dẫn gốc của dự án
			$part_root = $_SERVER['DOCUMENT_ROOT'];//D:/xampp/htdocs
			//tạo đường dân thư mục file đầy đủ
			$full_part = $part_root .'/php_day4/images/'. $img_name;
			move_uploaded_file($tmp_name, $full_part);	
			$item = array (
				//'ten'=> $tendangnhap,
				'matkhau'=> $pass,
				'hovaten'=> $hoten,
				'hinhanh'=> $img,
				'diachi' => $diachi,
				'gender' => $gender,
				'hobby' =>$hobby,
				'img_name' =>$img_name
				);
			
			$_SESSION['danhsachtaikhoan'][$tendangnhap] = $item;
		};
		if(isset($_GET['tendangnhap'])){
		$tendangnhap=$_GET['tendangnhap'];
		unset($_SESSION['danhsachtaikhoan'][$tendangnhap]);
		header("location: btday4.php");
	};
	echo '<pre>';
	print_r($_SESSION['danhsachtaikhoan']);
	//print_r($_GET['ten']);
	echo '</pre>';	
?>
<h1><strong>Danh sách tài khoản</strong></h1>
<table>
	<tr>
		<th>TT</th>
		<th>Tên tài khoản</th>
		<th>Họ và tên</th>
		<th>Ảnh đại diện</th>
		<th>Giới tính</th>
		<th>Địa chỉ</th>
		<th>Chức năng</th>
	</tr>
	<tr>
	<?php
	foreach ($_SESSION['danhsachtaikhoan'] as $key => $value) { ?>
	</tr>
	<tr>
		<td></td>>
		<td><?= $key ?></td>
		<td><?= $value['hovaten'] ?></td>
		<td><img src='<?= "images/$value[img_name]" ?>' ></td>
		<td><?= $value['gender'] ?></td>
		<td><?= $value['diachi'] ?></td>
		<td><a href="btday4.php?tendangnhap=<?=$key?>">Xóa</a></td>
	</tr>
	<?php }  ?>
</table>