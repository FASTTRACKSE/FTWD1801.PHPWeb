<style>
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
}
</style>
<table>
	<tr >
		<th>STT</th>
	</tr>
	<?php $asm = array(
		'giatri1'=>	array(
			'a1'=>1,
			'b1'=>2
		),
	);
	foreach($asm as $item=>$value){?>
		<tr>
			<td><?=$value['a1']?></td>
		</tr>
		<tr>
			<td><?=$value['b1']?></td>
		</tr>
	<?php } ?>
</table>

