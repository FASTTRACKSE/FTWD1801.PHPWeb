<meta charset="utf-8">

<?php 
	$month = 5;
	// Tháng có 31 ngày
	if ($month == 1  ||
		$month == 3  ||	
		$month == 5  ||
		$month == 7  ||
		$month == 8  ||
		$month == 10 ||
		$month == 12   )
	{
		echo "Tháng $month có 31 ngày";
	// Tháng có 30 ngày
	}elseif ($month == 4  ||
			 $month == 6  ||
			 $month == 9  ||
			 $month == 11 	) 
	{
		echo "Tháng $month có 30 ngày ";
	// Tháng 2 có 28 or 29 ngày
	}elseif ($month == 2) {
		echo "Tháng $month có 28 hoặc 29 ngày";
	// Nhập sai tháng
	}else {
		echo "Tháng $month không tồn tại ";
	}

 ?>