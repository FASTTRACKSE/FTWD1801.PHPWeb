<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style>
	table {
		border-collapse: collapse;
		width: 60%;	    
	}
	td, th {
		border: 1px solid;
		text-align: center;
		/* padding: 5px; */
	}
</style>
</head>
<body>
	<h3>Đăng ký tài khoản</h3>
	<form action="asm_bt_day4b.php" method="post" id="form" enctype="multipart/form-data">
		<table>
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
					<input type="radio" name="gender" value="Nam">Nam <br>
					<input type="radio" name="gender" value="Nữ">Nữ  <br>
					<input type="radio" name="gender" value="Khác">Khác
				</td>					
			</tr>
			<tr>
				<td>Sở thích</td>
				<td>
					<input type="checkbox" name="hobbit" value="Xem phim">Xem Phim <br>
					<input type="checkbox" name="hobbit" value="Nghe nhạc">Nghe nhạc <br>
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
</body>
</html>