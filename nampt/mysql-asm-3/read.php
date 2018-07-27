<?php 
	if (isset($_GET['id'])) {

		$user_id = $_GET['id'];
		$mysqli = new mysqli('localhost','root','','ma_sinhvien');
		$mysqli->set_charset('utf8');
		if ($mysqli->connect_errno) {
			echo "Can't connect to mysql".$mysqli->error;
		}else{
			$sql = "SELECT * FROM `lms_users` WHERE user_id='$user_id' ";
			$result = $mysqli->query($sql);
		};				
	}else{
		echo 'Không nhận được dữ liệu';
	};

 ?>
<!DOCTYPE html>
<html lang="en"><head>
	<title> Read </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="js/read.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
 	<link rel="stylesheet" href="css/read.css">
</head>
<body >
	<div class="container">
		<h3 class="display-4 text-xs-center">View User Info </h3>
		<hr>
		<table class="table table-hover">
  		<thead>
		    <tr>
		      
		      <th scope="col">User Name</th>
		      <th scope="col">Full Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Password</th>
		    </tr>
	  	</thead>
	  <tbody>
	  	<?php while($row = $result->fetch_assoc() ) { ?>	  			  	
	    <tr>
	     
	      <td><?= $row['user_name'] ?></td>
	      <td><?= $row['user_fullname'] ?></td>
	      <td><?= $row['user_email'] ?></td>
	      <td><?= $row['user_password'] ?></td>
	    </tr>	    
	    <?php }  ?>
	  </tbody>
	</table>
	<a href="index.php" class="btn btn-secondary">Back</a>
	</div><!-- end container -->
</body>
</html>