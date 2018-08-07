<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
  if (isset($_POST['submit'])) {
  	$id_edu = $_GET['id'];
  	$name_edu = $_POST['name_edu'] ;
  	$address_edu = $_POST['address_edu'] ;
  	$time_edu = $_POST['time_edu'] ;
  	
  	
  	$sql = " UPDATE edu SET name_edu='$name_edu',address_edu='$address_edu',time_edu='$time_edu' WHERE id_edu = '$id_edu'   ";
	$result = $mysqli->query($sql);

	header("location:index.php");
	// echo '<pre>';
	//var_dump($result);
	// echo '</pre>';
	//echo $row['id_aboutme'];
  }
	

 ?>