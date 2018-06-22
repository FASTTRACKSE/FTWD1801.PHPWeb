<?php 
	$a= 1;
	$b=2;

	$d= $b*$b-(4*$a*$c);
	if($d<0){
		echo "Pt vo nghiem";
	}else{
		if($d==0){
			$x= -$b/(2*$a);
			$str = "Pt co nghiem kep x=$x";
		}else{
			$x1= -$b-sqrt($d)/(2*$a);
			$x2= -$b+sqrt($d)/(2*$a);
			echo "Pt co 2 nghiem x1= $x1 <br/> x2=$x2";
		}
	}
?>
