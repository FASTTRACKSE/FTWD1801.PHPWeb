<meta charset="utf-8">
<?php 
	$moneyMustPay = 269 ;
	if ($moneyMustPay >= 300) {
		echo 'Bạn được giảm giá 30%';
	} elseif ($moneyMustPay >= 200) {
		echo 'Bạn được giảm giá 20%';
	}else {
		echo 'Bạn không được giảm giá';
	}

 ?>