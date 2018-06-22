<meta charset="utf-8">
<?php 
// Bài 2 Giải Phương trình bậc 2
$a = 4;
$b = -2;
$c = 3;
$delta = $b*$b -4*$a*$c;
$canDelta = sqrt($delta);
if ($delta > 0) {
	echo 'Phương trình có 2 nghiệm phân biệt : '.(-$b + $canDelta)/(2*$a).'và '.(-$b - $canDelta)/(2*$a);	
}elseif ($delta < 0) {
	echo 'Phương trình vô nghiệm';
}else {
	echo 'Phương trình có nghiệm kép : '.-$b/2*$a;
}






 ?>