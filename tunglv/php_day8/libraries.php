<?php 
	function connectDB(){
		$mysqli = new mysqli("localhost","root",'','ffse1701');
		$mysqli->set_charset('utf8');
		if($mysqli->connect_errno){
			return $mysqli->error;
		}else{
			return $mysqli;
		}
		
	}
?>