

			
			<?php require "../../../templates/backend/header.php"; ?>
				 <div class="container">
				 	<form action="add.php" method="post">
					  <div class="form-group">
					    <label ><strong>Name</strong></label>
					    <input type="text" class="form-control"  name="name_exp"  >
					  </div>
					  <div class="form-group">
					    <label ><strong>Detail</strong></label>
					    <input type="text" class="form-control"  name="detail_exp" >  
					  </div>
					  <div class="form-group">
					    <label ><strong>Time</strong></label>
					    <input type="text" class="form-control"  name="time_exp"  placeholder ="xx-xx-xxxx">
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
			  	$name_exp = $_POST['name_exp'];
			  	$detail_exp = $_POST['detail_exp'];
			  	$time_exp = $_POST['time_exp'];
			  	$sql = " INSERT INTO exp(name_exp,detail_exp,time_exp) VALUES ('$name_exp','$detail_exp','$time_exp'); ";
				$result = $mysqli->query($sql);
				//$row = $result->fetch_assoc();
				// echo '<pre>';
				 //var_dump($result);	
				// echo '</pre>';
				//echo $row['id_aboutme'];
				//zheader("location:view.php");

			  }
				
			 ?>       
