<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
  	$id_exp = $_GET['id'];
	$sql = " SELECT * FROM exp WHERE id_exp='$id_exp'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
	// echo '<pre>';
	// var_dump($row);
	// echo '</pre>';
	//echo $row['id_aboutme'];

 ?>
 <?php require "../../../templates/backend/header.php"; ?>
 	
    <div class="container">
	 	<form action="do_update.php?id=<?= $row['id_exp'] ?>" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label ><strong>Name</strong></label>
		    <input type="text" class="form-control" value="<?= $row['name_exp'] ?>" name="name_exp"  >
		  </div>
		  <div class="form-group">
		    <label ><strong>Detail</strong></label>
		    <input type="text" class="form-control" value="<?= $row['detail_exp'] ?>" name="detail_exp" >  
		  </div>
		  <div class="form-group">
		    <label ><strong>Time</strong></label>
		    <input type="text" class="form-control" value="<?= $row['time_exp'] ?>" name="time_exp"  >
		  </div>
		  

		 
		  
		  <input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
		  <a href="index.php" class="btn btn-danger">Back</a>
		  
		</form>
	</div>
 