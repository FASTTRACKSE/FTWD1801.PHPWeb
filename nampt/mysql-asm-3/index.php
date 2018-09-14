
<?php 
	$mysqli = new mysqli('localhost','root','','ma_sinhvien');
	if ($mysqli->connect_errno) {
		echo "Can't connect to mysql".$mysqli->error;
	}; 
		$mysqli->set_charset('utf8');
		$sql = "SELECT * FROM `lms_users`";
		$result = $mysqli->query($sql);
		//$row = $result->fetch_assoc();
		// echo '<pre>';
		// print_r($row);
		// echo '</pre>';	
		
 ?>
<!DOCTYPE html>
<html lang="en"><head>
	<title> Index </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="js/1.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
 	<link rel="stylesheet" href="css/1.css">
</head>
<body >
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h3 class="display-4">Users list</h3>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<a href="ceate.php" class="btn btn-success">Add new user</a>

			</div>
		</div>
	</div>
 	<table class="table table-hover">
  		<thead>
			    <tr>
			      <th scope="col">ID</th>
		      <th scope="col">User Name</th>
		      <th scope="col">Full Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Password</th>
		      <th scope="col">Action</th>
		    </tr>
	  	</thead>
	  <tbody>
	  	<?php while($row = $result->fetch_assoc() ) { ?>	  			  	
	    <tr>
	      <th scope="row"><?= $row['user_id'] ?></th>
	      <td><?= $row['user_name'] ?></td>
	      <td><?= $row['user_fullname'] ?></td>
	      <td><?= $row['user_email'] ?></td>
	      <td><?= $row['user_password'] ?></td>
	      <td>
	      	<a href="read.php?id=<?=  $row['user_id'] ?>" class="fa fa-eye"></a>
	      	<a href="update.php?id=<?=  $row['user_id'] ?>" class="fa fa-pencil"></a> 
	      	<a href="delete.php?id=<?=  $row['user_id'] ?>" class="fa fa-trash"></a> 
	      </td>
	    </tr>
	    <?php }  ?>
	  </tbody>
	</table>
</body>
</html>
