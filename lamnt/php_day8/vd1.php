<?php 
	//Khởi tạo connection
	$mysqli = new mysqli("localhost","root",'','ffse1701');
	$mysqli->set_charset('utf8');
	if($mysqli->connect_errno){
		echo $mysqli->error;
	}else{
		$sql = "SELECt first_name FROM lms_students";
		$result = $mysqli->query($sql);
		
		while($item = $result->fetch_assoc()){
			
		}
		
	}
	$mysqli->close();
?>

