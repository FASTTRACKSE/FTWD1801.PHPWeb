<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
	$sql = " SELECT * FROM about_me ";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
	// echo '<pre>';
	// var_dump($row);
	// echo '</pre>';
	//echo $row['id_aboutme'];

 ?>
 <?php require "../../../templates/backend/header.php"; ?>
 	
    <div class="container">
	 	<form action="do_update.php?id=<?= $row['id_aboutme'] ?>" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label ><strong>Name</strong></label>
		    <input type="text" class="form-control" value="<?= $row['name_aboutme'] ?>" name="name_aboutme"  >
		  </div>
		  <div class="form-group">
		    <label ><strong>Detail</strong></label>
		    <input type="text" class="form-control" value="<?= $row['detail_aboutme'] ?>" name="detail_aboutme" >  
		  </div>
		  <div class="form-group">
		    <label ><strong>Phone</strong></label>
		    <input type="text" class="form-control" value="<?= $row['phone_aboutme'] ?>" name="phone_aboutme"  >
		  </div>
		  <div class="form-group">
		    <label ><strong>Address</strong></label>
		    <input type="text" class="form-control" value="<?= $row['address_aboutme'] ?>" name="address_aboutme"   >
		  </div>
		  <div class="form-group">
		    <label ><strong>Email</strong></label>
		    <input type="text" class="form-control" value="<?= $row['email_aboutme'] ?>" name="email_aboutme"   >
		  </div>
		  <div class="form-group">
		    <label ><strong>Avatar</strong></label>
		    <input type="file" class="form-control"  value="<?= $row['avatar_aboutme'] ?>" name="avatar_aboutme" >
		  </div>

		 
		  
		  <input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
		  <a href="index.php" class="btn btn-danger">Back</a>
		  
		</form>
	</div>
 