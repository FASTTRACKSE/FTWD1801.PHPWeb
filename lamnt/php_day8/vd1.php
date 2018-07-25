<?php 
	//Khởi tạo connection
	$mysqli = new mysqli("localhost","root",'','ffse1701');
	$mysqli->set_charset('utf8');
	if($mysqli->connect_errno){
		echo $mysqli->error;
	}else{
		$sql = "SELECt * FROM lms_students";
		$result = $mysqli->query($sql);
		while($item = $result->fetch_assoc()){
?>
		<h5><?=$item['code']?></h5>
		<a href="read.php?id=<?=$item['id']?>">Read</a>
		<br>
<?php
		}
	}
	$mysqli->close();
?>

