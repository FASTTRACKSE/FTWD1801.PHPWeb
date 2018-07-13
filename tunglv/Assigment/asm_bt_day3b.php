<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GIỎ HÀNG</title>
	<style>
	table {
		border-collapse: collapse;
  		width: 80%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
	}
	</style>
</head>
<body>
<?php 	
			// nếu ấn vào nút submit
		if(isset($_POST['submit'])){
			$id=$_POST['id'];
			$name=$_POST['ten'];
			$price=$_POST['gia'];
			$qty=$_POST['soluong'];
			// validate form
			if ($id==""||$name==""||$price==""||$qty=="") {
				echo 'Vui lòng nhập đầy đủ thông tin';
			} else {
				// tạo mảng item từ data nhận đc từ form
				$item = array (
				'name'=> $name,
				'price'=> $price,
				'qty'=> $qty,
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
			header("location: shop.php");
		}			
	?>	
	<table>
		<tr>
		    <th>Tên Hoa</th>
		    <th>Giá tiền  </th>
		    <th>Số lượng</th>
		    <th>Tổng tiền</th>
		    <th>Chức năng</th>
		   
		  
		</tr>
		<?php $tong=0; foreach ($_SESSION['giohoa'] as $key => $item){ 
			$tong +=  $item['qty']*$item['price'];
		?>
			
		<tr>
			<td><?= $item['name'] ?></td>
			<td><?= $item['price'] ?></td>
			<td><?= $item['qty'] ?></td>		
			<td><?= $item['qty']*$item['price'] ?></td>			
			<td><a href="shop.php?id=<?=$key?>">Xóa</a></td>

		</tr>				 		
	 	<?php } ?>

	</table>
	<h3>Thành tiền : <?= $tong ?></h3>	
</body>
</html>