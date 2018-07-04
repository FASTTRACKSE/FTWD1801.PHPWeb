<?php
	session_start();

	if(isset($_SESSION['giohoa'])){
		echo "<pre>";
		print_r($_SESSION['giohoa']);
		echo "</pre>";
	}
?>
<a href="shop.php">shop </a>