<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
  	$id_edu = $_GET['id'];
	$sql = " SELECT * FROM edu WHERE id_edu='$id_edu'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
	// echo '<pre>';
	// var_dump($row);
	// echo '</pre>';
	//echo $row['id_aboutme'];

 ?>
 <?php require "../../../templates/backend/header.php"; ?>
 	
    <div class="container">
	 	<form action="do_update.php?id=<?= $row['id_edu'] ?>" method="post" >
		  <div class="form-group">
		    <label ><strong>Name</strong></label>
		    <input type="text" class="form-control" value="<?= $row['name_edu'] ?>" name="name_edu"  >
		  </div>
		  <div class="form-group">
		    <label ><strong>Detail</strong></label>
		    <input type="text" class="form-control" value="<?= $row['address_edu'] ?>" name="address_edu" >  
		  </div>
		  <div class="form-group">
		    <label ><strong>Time</strong></label>
		    <input type="text" class="form-control" value="<?= $row['time_edu'] ?>" name="time_edu"  >
		  </div>
		  

		 
		  
		  <input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
		  <a href="index.php" class="btn btn-danger">Back</a>
		  
		</form>
	</div>
 