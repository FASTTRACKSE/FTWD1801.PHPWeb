
 <?php  session_start();?>
<?php 
    require "../libraries/connect.php";
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];

      $password = $_POST['password'];      
      // echo '<pre>';
      // print_r($user);
      // echo '</pre>';
      $sql ="SELECT * FROM user WHERE username = '$username'";
      
      $result = $mysqli->query($sql);
      if ($result->num_rows > 0) {
        echo "<script language='javascript'>alert('Tên đăng nhập $username đã bị trùng'); window.location='register.php';</script>";
        die();
      } else {
        $sql = " INSERT INTO user(username,password) VALUES ('$username','$password') "; 
        $res = $mysqli->query($sql);
        echo '<script language="javascript">alert("Đăng ký thành công");window.location="login.php";</script>';
        
      }
           
    }
   


   ?>
 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register</title>

    <!-- Bootstrap core CSS-->
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/backend/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Register</div>
        <div class="card-body">
          <form action="register.php" method="post">
             <!--  <h4 class="btn btn-outline-success btn-block"><?=  $alert ?></h4> -->
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Username" required="required" autofocus="autofocus" name="username">
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
         
            <input  type="submit" class="btn btn-success btn-block" name="submit" value="Sign up"></input>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Back to login</a>           
          </div>
          <!-- z -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/backend/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
  

</html>
