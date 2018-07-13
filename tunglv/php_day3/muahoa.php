<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mua hoa</title>
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;

		    
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: center;
		    padding: 8px;

		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
</head>
<body>
	<fieldset>
		<legend>Mua hoa</legend>
		<form action="muahoa.php" method="post">
			id :       <input type ="text" name="id"><br><br>
			ten :      <input type="text" name="ten"><br><br>
			gia :      <input type="text" name="gia"><br><br>
			so luong : <input type="text" name="soluong"><br><br>
			giới tính : <input type="radio" name="gender" value="nam">Nam
			 <input type="radio" name="gender" value="nu">Nữ
			<input type="submit" value="gui" name="submit">
		</form>
	</fieldset>
	<?php 	
			// nếu ấn vào nút submit
		if(isset($_POST['submit'])){
			$id=$_POST['id'];
			$name=$_POST['ten'];
			$price=$_POST['gia'];
			$qty=$_POST['soluong'];
			$gender = $_POST['gender'];
			// validate form
			if ($id==""||$name==""||$price==""||$qty=="") {
				echo 'Vui lòng nhập đầy đủ thông tin';
			} else {
				// tạo mảng item từ data nhận đc từ form
				$item = array (
				'name'=> $name,
				'price'=> $price,
				'qty'=> $qty,
				'gender' => $gender
				);
				// 	nếu tồn tại id thì cộng dồn số lượng mới và cũ	
				if (isset($_SESSION['giohoa'][$id])) {
					$_SESSION['giohoa'][$id]['qty'] += $qty;
				// nếu chưa tồn tại id thì lưu mảng item vào session
				} else {
					$_SESSION['giohoa'][$id]=$item;
				}				
			} 																								
		}
		// xử lý phần xóa theo id bằng phương thức get
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			unset($_SESSION['giohoa'][$id]);
			header("location: muahoa.php");
		}
		

					
	?>	
	<table>
		<tr>
		    <th>Tên hoa</th>
		    <th>Giá tiền  </th>
		    <th>Số lượng</th>
		    <th>Giới tính </th>
		    <th>Thành tiền</th>
		    <th>Chức năng</th>
		   
		  
		</tr>
		<?php $tong=0; foreach ($_SESSION['giohoa'] as $key => $item){ 
			$tong +=  $item['qty']*$item['price'];
		?>
			
		<tr>
			<td><?= $item['name'] ?></td>
			<td><?= $item['price'] ?></td>
			<td><?= $item['qty'] ?></td>
			<td><?= $item['gender'] ?></td>			
			<td><?= $item['qty']*$item['price'] ?></td>			
			<td><a href="muahoa.php?id=<?=$key?>">Xóa</a></td>

		</tr>				 		
	 	<?php } ?>

	</table>
	<h3>Thành tiền : <?= $tong ?></h3>		
</body>
</html>