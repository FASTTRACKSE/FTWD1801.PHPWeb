<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
  	$id_exp = $_GET['id'];
	$sql = " DELETE FROM exp WHERE id_exp='$id_exp'; ";
	$result = $mysqli->query($sql);
	//$row = $result->fetch_assoc();
	// echo '<pre>';
	 //var_dump($result);
	// echo '</pre>';
	//echo $row['id_aboutme'];
	 header("location:index.php");
 ?>