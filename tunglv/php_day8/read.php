<?php
	if(isset($_GET['id'])){
		$id =  $_GET['id'];
		require "libraries.php";
		$mysqli=connectDB();
		$sql="SELECT * FROM lms_students WHERE id = $id";
		$result= $mysqli->query($sql);
		$item = $result->fetch_assoc();
		echo "<pre>";
		print_r($item);
		echo "</pre>";
	}
	
?>