<?php 
	session_start();
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		unset($_SESSION['giohoa'][$id]);
		header("location: basket.php");
	}
?>