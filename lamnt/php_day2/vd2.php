<style>
	table, th, td {
   		border: 1px solid black;
	}
</style>
<table>
	<tr >
		<th>STT</th>
	</tr>
	<?php $arr=array(1,2,3,4); foreach($arr as $item){?>
	<tr>
		<td><?=$item?></td>
	</tr>
     <?php } ?>
</table>
<?php 
	$a = 5;
	$b=4;
	echo "$a - $b";
	echo "<hr>";
	$c=$a;
	$a=$b;
	$b=$c;
	echo "$a - $b";
?>
