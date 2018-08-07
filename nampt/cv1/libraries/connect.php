<?php 
	$mysqli = new mysqli("localhost","root","","cv");
	if($mysqli->connect_errno){
		echo $mysqli->connect_error;
	}
	
	$mysqli->set_charset("utf8");
?>