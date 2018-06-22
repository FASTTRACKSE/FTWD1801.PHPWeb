<?php
$a = 5;
$b = 10;
$c = 5;


if($a==0){
	if($b==0)
		{echo "Phương trình có vô số nghiệm";
		}
	else{echo "Phương trình vô nghiệm";
		}
	}
else{$d=$b*$b-4*$a*$c;
		if($d<0){echo "Phương trình vô nghiệm";
		}
		else{if($d==0){echo "Phương trình có nghiệm kép x=".-$b/(2*$a);}
			else{echo "Phương trình có 2 nghiệm phân biệt";
				echo "<br>";
				echo "x1=".(-$b+sqrt($d))/(2*$a);
				echo "<br>";
				echo "x2=".(-$b-sqrt($d))/(2*$a);}
		}
}	

	

?>