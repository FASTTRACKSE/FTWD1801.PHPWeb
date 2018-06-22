<?php
$a=1;
$b=5;
$c=1;
$dt=$b*$b-(4*$a*$c);

if ($dt<0) {
	echo "phương trình vô nghiệm";
} 
else{
	if($dt==0){
		$x=-$b/(2*$a);
		echo "phương trình có nghiệm kép $x ";
	}
	else {
		$x1=(-$b + sqrt($dt))/(2*$a);
	    $x2=(-$b - sqrt($dt))/(2*$a);
		echo "phương trình có 2 nghiêm phân biệt $x1 $x2";
	}
} 
?>
