<?php 
	if(isset($_POST['Save'])){
		$id=$_GET['id'];
		$fullname=$_POST["fullname"];	
	}
	require "../../libraries/connect.php";
	$sql="UPDATE users SET fullname='$fullname' WHERE id='$id'";
	$rs = $mysqli->query($sql);
	if($rs){
		header("location: /cv/admin/users.html");
	}else{
		echo "Edit khong thanh cong";
	}
?>