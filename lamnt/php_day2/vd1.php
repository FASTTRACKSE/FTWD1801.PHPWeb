<?php 
	$asm = array(

		'giatri1'=>	array(
				'a1'=>1,
				'b1'=>2
			),
		'giatri2'=>array(
				'a2'=>3,	
				'b2'=>4
		),

	);
	echo "<pre>";
	print_r($asm);
	echo "</pre>";

?>
<hr>
<?php 
	foreach($asm as $key=>$value ){
		echo $value['a1'];
	}
	foreach($asm as $key=>$qưe ){
		echo $qưe['b2'];
	}
?>