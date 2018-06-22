<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOMEWORK</title>
</head>
<body>
	<style>
	table  {
		width: 100%;
		border: 1px solid black;
		border-collapse: collapse;
	}
	td ,th  {
		text-align: center;
		border: 1px solid black;
	}
	#tt2{
		color: red;
	}
	#tt0 {background-color: gray;
	}
	#d8:hover {color: red;
	}
</style>
<?php 
function a_b ($a,$b){
	if ($a != 0) {
		echo -$b/$a;
	} 
	else {
		if ($b == 0) {
			echo "phương trình có vô số nghiệm" ;
		} else  {
			echo "-" ;
		}
	}
}
function ghichu ($a,$b){
	if ($a != 0) {
		echo "Phương trình có nghiệm ";
	}else {
		echo "Hệ số không hợp lệ, a = 0";
	}
}
?>
<h1>Giải Phương trình bậc nhất, ẩn 1 số</h1>
<table>
	<tr id="tt0">
		<th>TT</th>
		<th>a</th>
		<th>b</th>
		<th>x</th>
		<th>Ghi chú</th>
		<th>Chức năng</th>
	</tr>
	<tr>
		<td>1</td>
		<td> 2.50 </td>
		<td> 2.00 </td>
		<td><?= a_b(2.50,2.00) ?></td>
		<td><?= ghichu(2.50,2.00) ?></td>
		<td>Xóa</td>
	</tr> 
	<tr id="tt2">
		<td>2</td>
		<td > 0.00 </td>
		<td> 1.00 </td>
		<td><?= a_b(0.00,1.00) ?></td>
		<td><?= ghichu(0.00,1.00) ?></td>
		<td>Xóa</td>
	</tr> 
	<tr>
		<td>3</td>
		<td> -1.70 </td>
		<td> -9.60 </td>
		<td><?= a_b(-1.70,-9.60) ?></td>
		<td><?= ghichu(-1.70,-9.60) ?></td>
		<td>Xóa</td>
	</tr> 
	<tr>
		<td>4</td>
		<td> 0.20 </td>
		<td> 0.50 </td>
		<td><?= a_b(0.20,0.50) ?></td>
		<td><?= ghichu(0.20,0.50) ?></td>
		<td>Xóa</td>
	</tr> 
	<tr>
		<td>5</td>
		<td> -6.20 </td>
		<td> 0.30 </td>
		<td><?= a_b(-6.20,0.30) ?></td>
		<td><?= ghichu(-6.20,0.30) ?></td>
		<td>Xóa</td>
	</tr> 
	<tr>
		<td>6</td>
		<td> 0.20 </td>
		<td> 3.60 </td>
		<td><?= a_b(0.20,3.60) ?></td>
		<td><?= ghichu(0.20,3.60) ?></td>
		<td>Xóa</td>
	</tr> 
	<tr>
		<td>7</td>
		<td> 9.50 </td>
		<td> 6.00 </td>
		<td><?= a_b(9.50,6.00) ?></td>
		<td><?= ghichu(9.50,6.00) ?></td>
		<td>Xóa</td>
	</tr> 
	<tr id="tt8">
		<td>8</td>
		<td> -3.90</td>
		<td> -0.30 </td>
		<td><?= a_b(-3.90,-0.30) ?></td>
		<td><?= ghichu(-3.90,-0.30) ?></td>
		<td id="d8" onclick="myFunction()">Xóa</td>
	</tr> 
</table>


<script>
function myFunction() {
    var x = document.getElementById("tt8");
    x.remove(x.selectedIndex);
    confirm("Bạn có muốn xóa dòng này?");
}
</script>
</body>
</html>