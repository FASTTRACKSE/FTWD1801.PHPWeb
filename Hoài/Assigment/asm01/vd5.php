<style>
	table {
		text-align: center;
		margin-left: 200px;
		width: 70%;
		height: 400px;
		border: 1px solid #CBCBCB;
		border-collapse: collapse;
	}
	td,th {
		border: 1px solid #CBCBCB;
		border-collapse: collapse;
	}
	th {
		background-color: #F5F5F5;
	}
	#n1 {
		color: red;
	}
	h1 {margin-left: 200px;
	}
	i {
		margin-left: 200px;
	}
</style>
<?php
$a=2.50;
$b=2.00;
if ($a!=0) {
	$x=-$b/$a;
  	$tr= "phương trình có nghiệm ";
}
else {
	if ($b==0) {
 	 $tr= "phương trình có vô số nghiệm";
	}
	else {
	 $tr= "Hệ số không hợp lệ , a = 0";
	}
}

?>
<?php
$a1=0.00;
$b1=1.00;
if ($a1!=0) {
	$x1=-$b1/$a1;
  	$tr1= "phương trình có nghiệm ";
}
else {
	if ($b1==0) {
 	 $tr1= "phương trình có vô số nghiệm";
	}
	else {
	 $tr1= "Hệ số không hợp lệ , a = 0";
	}
}

?>
<?php
$a2=-1.70;
$b2=-9.60;
if ($a2!=0) {
	$x2=-$b2/$a2;
  	$tr2= "phương trình có nghiệm ";
}
else {
	if ($b2==0) {
 	 $tr2= "phương trình có vô số nghiệm";
	}
	else {
	 $tr2= "Hệ số không hợp lệ , a = 0";
	}
}

?>    
<?php
$a3=0.20;
$b3=0.50;
if ($a3!=0) {
	$x3=-$b3/$a3;
  	$tr3= "phương trình có nghiệm ";
}
else {
	if ($b3==0) {
 	 $tr3= "phương trình có vô số nghiệm";
	}
	else {
	 $tr3= "Hệ số không hợp lệ , a = 0";
	}
}

?>    
<?php
$a4=-6.20;
$b4=0.30;
if ($a4!=0) {
	$x4=-$b4/$a4;
  	$tr4= "phương trình có nghiệm ";
}
else {
	if ($b4==0) {
 	 $tr4= "phương trình có vô số nghiệm";
	}
	else {
	 $tr4= "Hệ số không hợp lệ , a = 0";
	}
}

?> 
<?php
$a5=0.20;
$b5=3.60;
if ($a5!=0) {
	$x5=-$b5/$a5;
  	$tr5= "phương trình có nghiệm ";
}
else {
	if ($b5==0) {
 	 $tr5= "phương trình có vô số nghiệm";
	}
	else {
	 $tr5= "Hệ số không hợp lệ , a = 0";
	}
}

?> 
<?php
$a6=9.50;
$b6=6.00;
if ($a6!=0) {
	$x6=-$b6/$a6;
  	$tr6= "phương trình có nghiệm ";
}
else {
	if ($b6==0) {
 	 $tr6= "phương trình có vô số nghiệm";
	}
	else {
	 $tr6= "Hệ số không hợp lệ , a = 0";
	}
}

?>  
<?php
$a7=-3.90;
$b7=-0.30;
if ($a7!=0) {
	$x7=-$b7/$a7;
  	$tr7= "phương trình có nghiệm ";
}
else {
	if ($b7==0) {
 	 $tr7= "phương trình có vô số nghiệm";
	}
	else {
	 $tr7= "Hệ số không hợp lệ , a = 0";
	}
}

?>  
<h1>
<?php
echo "Giải phương trình bậc nhất,1 ẩn số";
?> 
</h1>          
<table>
	<tr>
	 	<th>TT</th>
	 	<th>a</th>
	 	<th>b</th>
	 	<th>x</th>
	 	<th>Ghi chú</th>
	</tr>
    <tr>
	 	<td>1</td>
	 	<td>2.50</td>
	 	<td>2.00</td>
	 	<td><?php echo "$x"?></td>
	 	<td><?php echo "$tr"?></td>
	</tr>
	<tr id="n1">
	 	<td>2</td>
	 	<td>0.00</td>
	 	<td>1.00</td>
	 	<td>-</td>
	 	<td><?php echo "$tr1"?></td>
	</tr>
	<tr>
	 	<td>3</td>
	 	<td>-1.70</d>
	 	<td>-9.60</td>
	 	<td><?php echo "$x2";?></td>
	 	<td><?php echo "$tr2"?></td>
	</tr>
	<tr>
	 	<td>4</td>
	 	<td>0.20</td>
	 	<td>0.50</td>
	 	<td><?php echo "$x3";?></td>
	 	<td><?php echo "$tr3"?></td>
	</tr>
	<tr>
	 	<td>5</td>
	 	<td>-6.20</td>
	 	<td>0.30</td>
	 	<td><?php echo "$x4";?></td>
	 	<td><?php echo "$tr4"?></td>
	</tr>
	<tr>
	 	<td>6</td>
	 	<td>0.20</td>
	 	<td>3.60</td>
	 	<td><?php echo "$x5";?></td>
	 	<td><?php echo "$tr5"?></td>
	</tr>
	<tr>
	 	<td>7</td>
	 	<td>9.50</td>
	 	<td>6.00</td>
	 	<td><?php echo "$x6";?></td>
	 	<td><?php echo "$tr6"?></td>
	</tr>
	<tr>
	 	<td>8</td>
	 	<td>-3.90</td>
	 	<td>-0.30</td>
	 	<td><?php echo "$x7";?></td>
	 	<td><?php echo "$tr7"?></td>
	</tr>
</table>
<i>
	<?php
	$name ="truong 247";
	echo "©2017-PHP Assignment.Create By <strong>$name</strong> ";
	?>
</i>

