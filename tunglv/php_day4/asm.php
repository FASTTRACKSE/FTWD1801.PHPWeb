<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng ký tài khoản</title>
</head>
<style>
	table {
	    border-collapse: collapse;
	    width: 100%;	    
	}
	td, th {
	    border: 1px solid #dddddd;
	    text-align: center;
	    padding: 8px;
	}
	/*tr:nth-child(even) {
	    background-color: #dddddd;
	}*/
</style>
<body>
	<fieldset>
		<legend>Đăng ký tài khoản</legend>
		<form action="asm.php" method="post" id="form" enctype="multipart/form-data">
			<table>
				<!-- <tr>
					<td>ID (*)</td>
					<td><input type="text" name="id" required></td>
				</tr> -->
				<tr>
					<td>Tên đăng nhập (*)</td>
					<td><input type="text" name="user" required></td>
				</tr>
				<tr>
					<td>Mật khẩu (*)</td>
					<td><input type="password" name="pass" required></td>
				</tr>
				<tr>
					<td>Họ và tên (*)</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Ảnh đại diện (*)</td>
					<td><input type="file" name="avatar" required></td>
				</tr>
				<tr>
					<td>Địa chỉ </td>
					<td>
						<select name="address" form="form">
						  <option value="Đà Nẵng">Đà Nẵng</option>
						  <option value="Hà Nội">Hà Nội</option>
						  <option value="Sài Gòn">Sài Gòn</option>
						  <option value="Huế">Huế</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>
						<input type="radio" name="gender" value="Nam">Nam
						<input type="radio" name="gender" value="Nữ">Nữ
						<input type="radio" name="gender" value="Khác">Khác
					</td>					
				</tr>
				<tr>
					<td>Sở thích</td>
					<td>
						<input type="checkbox" name="hobbit" value="Xem phim">Xem Phim 
						<input type="checkbox" name="hobbit" value="Nghe nhạc">Nghe nhạc 
						<input type="checkbox" name="hobbit" value="Đọc báo">Đọc báo
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Xác nhận">
						<input type="reset" value="Hủy bỏ"> 
					</td>
				</tr>
			</table>
		</form>
	</fieldset>
	<?php 
	// lấy dữ liệu từ form
		//$id = $_POST['id'];
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
			$part_root = $_SERVER['DOCUMENT_ROOT'];//D:/xampp/htdocs
			//tạo đường dân thư mục file đầy đủ
			$full_part = $part_root .'/FTWD1801.PHPWeb/tunglv/php_day4/images/'. $img_name;
			//$fullpart = D:/xampp/htdocs/FTWD1801.PHPWeb/nampt/php_day4/images/tenfile;
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
		//session_unset($_SESSION['profile']);		
	echo '<pre>';
	print_r($_SESSION['profile']);
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
