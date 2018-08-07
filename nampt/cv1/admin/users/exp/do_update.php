<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
  if (isset($_POST['submit'])) {
  	$id_exp = $_GET['id'];
  	$name_exp = $_POST['name_exp'] ;
  	$detail_exp = $_POST['detail_exp'] ;
  	$time_exp = $_POST['time_exp'] ;
  	
  	
  	$sql = " UPDATE exp SET name_exp='$name_exp',detail_exp='$detail_exp',time_exp='$time_exp' WHERE id_exp = '$id_exp'   ";
	$result = $mysqli->query($sql);

	header("location:index.php");
	// echo '<pre>';
	//var_dump($result);
	// echo '</pre>';
	//echo $row['id_aboutme'];
  }
	

 ?>