<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VD6</title>
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
	#n2{
		color: red;
	}
	#n0 {background-color: #f5f5ef;}
</style>
	<script>

function deleteRow(r) {
 	confirm("Xóa dòng này");
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
    
} 
</script>
</head>
<body>
	
<?php 
function count_X ($a,$b){
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
function ghiChu ($a,$b){
	if ($a != 0) {
		echo 'Phương trình có nghiệm ';
	}else {
		echo 'Giá trị gán không hợp lệ, a=0';
	}
}
?>
<h1>Giải Phương trình bậc nhất , ẩn 1 số</h1>
<table id="myTable">
	<tr id="n0">
		<th>TT</th>
		<th>a</th>
		<th>b</th>
		<th>x</th>
		<th>Ghi chú</th>
		<th>Chức năng</th>
	</tr>
	<tr id="n1">
		<td>1</td>
		<td> 2.50 </td>
		<td> 2.00 </td>
		<td><?= count_X(2.50,2.00) ?></td>
		<td><?= ghiChu(2.50,2.00) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr> 
	<tr id="n2">
		<td>2</td>
		<td > 0.00 </td>
		<td> 1.00 </td>
		<td><?= count_X(0.00,1.00) ?></td>
		<td><?= ghiChu(0.00,1.00) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr> 
	<tr id="n3">
		<td>3</td>
		<td> -1.70 </td>
		<td> -9.60 </td>
		<td><?= count_X(-1.70,-9.60) ?></td>
		<td><?= ghiChu(-1.70,-9.60) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr> 
	<tr id="n4">
		<td>4</td>
		<td> 0.20 </td>
		<td> 0.50 </td>
		<td><?= count_X(0.20,0.50) ?></td>
		<td><?= ghiChu(0.20,0.50) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr> 
	<tr id="n5">
		<td>5</td>
		<td> -6.20 </td>
		<td> 0.30 </td>
		<td><?= count_X(-6.20,0.30) ?></td>
		<td><?= ghiChu(-6.20,0.30) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr> 
	<tr id="n6">
		<td>6</td>
		<td> 0.20 </td>
		<td> 3.60 </td>
		<td><?= count_X(0.20,3.60) ?></td>
		<td><?= ghiChu(0.20,3.60) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr> 
	<tr id="n7">
		<td>7</td>
		<td> 9.50 </td>
		<td> 6.00 </td>
		<td><?= count_X(9.50,6.00) ?></td>
		<td><?= ghiChu(9.50,6.00) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr>
	<tr id="n8">
		<td>8</td>
		<td> -3.90</td>
		<td> -0.30 </td>
		<td><?= count_X(-3.90,-0.30) ?></td>
		<td><?= ghiChu(-3.90,-0.30) ?></td>
		<td><button type="button" class="removebutton" title="Remove this row" onclick="deleteRow(this)" >Xóa</button></td>
	</tr> 
</table>



</body>
</html>