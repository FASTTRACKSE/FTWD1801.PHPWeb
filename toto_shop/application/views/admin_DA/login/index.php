<html lang="en">
	<head>
		<title> login </title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<style>
	body {
		background-color: #337AB7;
	}
	.container {
		border: 1px solid #3DA3EF;
		width: 300px;
		height: 270px;
		text-align: center;;
		margin-left: 500px;
		margin-top: 150px;
		background-color: white;
	}
</style>
<body >
<div class="container">
<form action="" method="POST">

	<?php echo validation_errors(); 
		echo $this->session->msg;
	 ?>
	 <!-- <br>
	username: <input type="text" name="username"><br><br>
	password: <input type="password" name="password"><br>
	<input type="submit" name="login" > -->
	<lable><h3>username:</h3></lable>
	<input type="text" name="username">
	<lable><h3>password:</h3></lable>
	<input type="password" name="password"><br><br>
	<input type="submit" name="login" value="login" class="btn btn-primary">
</form>
</div>
</body>
</html>
