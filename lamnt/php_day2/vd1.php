<?php 
	$asm = array(

		'giatri1'=>	array(
				'a'=>1,
				'b2'=>2
			),
		'giatri2'=>array(
				'a'=>3,
				'b'=>4
		),

	);
	echo "<pre>";
	print_r($asm);
	echo "</pre>";

?>
<hr>
<?php 
	foreach($asm as $key=>$value ){
		echo $value['a'];
	}
?>