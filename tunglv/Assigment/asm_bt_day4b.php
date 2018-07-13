<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
			<style>
	table {
		border-collapse: collapse;
		width: 60%;	    
	}
	td, th {
		border: 1px solid;
		text-align: center;
		padding: 5px;
	}
	</style>
</head>
<body>
	<?php 
	// lấy dữ liệu từ form
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];
		$avatar = $_FILES['avatar'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$hobbit = $_POST['hobbit'];
	
		if (isset($_POST['submit'])) {
			// lấy thông tin file
			$img_name = $_FILES['avatar']['name'];
			$tmp_name = $_FILES['avatar']['tmp_name'];

			// láy đường dẫn gốc của dự án
			$part_root = $_SERVER['DOCUMENT_ROOT'];

			//tạo đường dân thư mục file đầy đủ
			$full_part = $part_root .'/FTWD1801.PHPWeb/tunglv/php_day4/images/'. $img_name;
			
			// di chuyển file từ thư mục ảo sang thư mục gốc
			move_uploaded_file($tmp_name, $full_part);	

			// bỏ data từ form vào mảng item
			$item = array(
			'user' => $user,
			'pass' => $pass,
			'name' => $name,
			'avatar' => $avatar,
			'address' => $address,
			'gender' => $gender,
			'hobbit' => $hobbit,
			'img_name' =>$img_name
		);
			
			// gán mảng item vào session để lưu lại
			$_SESSION['profile'][$user] = $item;
		};	
	?>
	<h1>Danh sách tài khoản</h1>
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
		
		<?php foreach ($_SESSION['profile'] as $key =>$value) { ?> 
		<tr>	
			<td></td>
			<td><?= $key ?></td>
			<td><?= $value['name'] ?></td>
			<td><img src='<?= "images/$value[img_name]" ?>' ></td>
			<td><?= $value['gender'] ?></td>
			<td><?= $value['address'] ?></td>
			<td></td>
		</tr>	
		<?php }  ?>
		
		
	</table>
</body>
</html>
