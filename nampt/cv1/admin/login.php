
 <?php  session_start();?>

 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Login</title>

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
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="login.php" method="post">
             <h4 class="btn btn-outline-danger btn-block"><?=  $_SESSION['alert'] ?></h4>

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
         
            <input  type="submit" class="btn btn-primary btn-block" name="submit" value="Login"></input>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>           
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
  <?php 
    require "../libraries/connect.php";
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $user = array('username'=>$username,'password'=>$password);
      // echo '<pre>';
      // print_r($user);
      // echo '</pre>';
      $sql = " SELECT * FROM user WHERE username='$username' AND password='$password' ";
      // echo $sql;
      $result = $mysqli->query($sql);
      if ($result->num_rows == 1) {
        $_SESSION['user'] = $user;
        header('location:index.php');        
      }else{
       $_SESSION['alert'] = 'Vui lòng nhập đúng tên đăng nhập và mật khẩu ';
      }
      //print_r($result);
      //$row = $result->fetch_assoc();
    }
   


   ?>

</html>
