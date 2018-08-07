

			
			<?php require "../../../templates/backend/header.php"; ?>
				 <div class="container">
				 	<form action="add.php" method="post">
					  <div class="form-group">
					    <label ><strong>Name</strong></label>
					    <input type="text" class="form-control"  name="name_edu"  >
					  </div>
					  <div class="form-group">
					    <label ><strong>Address</strong></label>
					    <input type="text" class="form-control"  name="address_edu" >  
					  </div>
					  <div class="form-group">
					    <label ><strong>Time</strong></label>
					    <input type="text" class="form-control"  name="time_edu"  placeholder ="xx-xx-xxxx">
					  </div>
					  

					 
					  
					  <input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
					  <a href="index.php" class="btn btn-danger">Back</a>
					  
					</form>
				</div>	

			<?php require "../../../templates/backend/footer.php"; ?>
			<?php 
				// $mysqli = new mysqli('localhost','root','','cv');
				// $mysqli->set_charset('utf8');
				// if ($mysqli->connect_errno) {
				// 	echo 'Cant connect to server'.$mysqli->connect_error;
				// }
			  require "../../../libraries/connect.php";
			  if (isset($_POST['submit'])) {
			  	$name_edu = $_POST['name_edu'];
			  	$address_edu = $_POST['address_edu'];
			  	$time_edu = $_POST['time_edu'];
			  	$sql = " INSERT INTO edu(name_edu,address_edu,time_edu) VALUES ('$name_edu','$address_edu','$time_edu'); ";
				$result = $mysqli->query($sql);
				//$row = $result->fetch_assoc();
				// echo '<pre>';
				 //var_dump($result);	
				// echo '</pre>';
				//echo $row['id_aboutme'];
				//zheader("location:view.php");

			  }
				
			 ?>       
