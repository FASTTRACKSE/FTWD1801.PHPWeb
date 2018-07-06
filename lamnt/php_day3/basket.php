<?php
	session_start();
	echo "<pre>";
		print_r($_SESSION['giohoa']);
	echo "</pre>";
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";
?>
<table>
	<tr>
		<th>id</th>
		<th>ten</th>
		<th>soluong</th>
		<th>soluong</th>
		<th>Tong tien</th>
		<th>Chuc nang</th>
	</tr>
<?php 
	$sum=0;
	foreach($_SESSION['giohoa']  as $key=>$value){
		$sum+=$value['price']*$value['qty'];
?>
		<tr>
			<td><?=$key?></td>
			<td><?=$value['name']?></td>
			<td><?=$value['qty']?></td>
			<td><?=$value['price']?></td>
			<td><?=$value['price']*$value['qty']?></td>
			<td><a href="deleteHoa.php?id=<?=$key?>">Xoa</a></td>
		</tr>
<?php
	}
?>
</table>
<h5>Thanh tien: <?=$sum?></h5>
<a href="shop.php">shop </a>