<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
  if (isset($_POST['submit'])) {
  	$id_aboutme = $_GET['id'];
  	$name_aboutme = $_POST['name_aboutme'] ;
  	$detail_aboutme = $_POST['detail_aboutme'] ;
  	$phone_aboutme = $_POST['phone_aboutme'] ;
  	$address_aboutme = $_POST['address_aboutme'] ;
  	$email_aboutme = $_POST['email_aboutme'] ;
  	// lấy thông tin file

	$img_name = $_FILES['avatar_aboutme']['name'];
	// echo '<pre>';
	// print_r($_FILES);
	// echo '</pre>';
	// echo $img_name;
	$tmp_name = $_FILES['avatar_aboutme']['tmp_name'];
	// láy đường dẫn gốc của dự án
	$part_root = $_SERVER['DOCUMENT_ROOT'];//D:/xampp/htdocs
	//tạo đường dân thư mục file đầy đủ
	$full_part = $part_root .'/FTWD1801.PHPWeb/nampt/cv1/images/'. $img_name;
	//$fullpart = D:/xampp/htdocs/FTWD1801.PHPWeb/nampt/php_day4/images/tenfile;
	// di chuyển file từ thư mục ảo sang thư mục gốc
	move_uploaded_file($tmp_name, $full_part);			
	// bỏ data từ form vào mảng item
  	$sql = " UPDATE about_me SET name_aboutme='$name_aboutme',detail_aboutme='$detail_aboutme',phone_aboutme='$phone_aboutme',address_aboutme='$address_aboutme',email_aboutme='$email_aboutme',avatar_aboutme='$img_name' WHERE id_aboutme = '$id_aboutme'   ";
	$result = $mysqli->query($sql);
	header("location:index.php");
	// echo '<pre>';
	//var_dump($result);
	// echo '</pre>';
	//echo $row['id_aboutme'];
  }
	

 ?>