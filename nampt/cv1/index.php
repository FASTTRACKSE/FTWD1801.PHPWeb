<?php 
  // kết nối với database
  require "libraries/connect.php";
  // select phần aboutme
  $sql = " SELECT * FROM about_me ";
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();
  // select phần experience
  $sql_exp = " SELECT * FROM exp ";
  $result_exp = $mysqli->query($sql_exp);
  // select phần education
  $sql_edu = " SELECT * FROM edu ";
  $result_edu = $mysqli->query($sql_edu);
  // echo '<pre>';
  // var_dump($row_exp);
  // echo '</pre>';
  //echo $row['id_aboutme'];

 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume </title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span><!-- rounded-circle -->
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile  mx-auto mb-2" src="images/<?= $row['avatar_aboutme'] ?>" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <!-- ABOUT ME -->
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0 text-primary"><?= $row['name_aboutme'] ?> </h1>
            
         
          <div class="subheading mb-5"><?=  $row['address_aboutme'] ?>
            <a href="mailto:name@email.com"><?=  $row['email_aboutme'] ?></a>
            <span><?=  $row['phone_aboutme'] ?></span>
          </div>
          <p class="mb-5"><?=  $row['detail_aboutme'] ?></p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <!-- END ABOUT ME -->

      <!-- EXP -->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Experience</h2>
          <?php while ( $row_exp = $result_exp->fetch_assoc()) { //var_dump($row_exp);?>          
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <h3 class="mb-0"><?= $row_exp['name_exp'] ?></h3>
                <div class="subheading mb-3">Intelitec Solutions</div>
                <p><?= $row_exp['detail_exp'] ?></p>
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary"><?= $row_exp['time_exp'] ?></span>
              </div>
            </div>
          <?php } ?>
        
      </section><!-- END EXP -->
      
      <!-- EDU -->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>
          <?php while ( $row_edu = $result_edu->fetch_assoc()) { //var_dump($row_exp);?>
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <h3 class="mb-0"><?= $row_edu['name_edu'] ?></h3>
                <div class="subheading mb-3">Bachelor of Science</div>
                <div><?= $row_edu['address_edu'] ?></div>
               
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary"><?= $row_edu['time_edu'] ?></span>
              </div>
            </div>
          <?php } ?>        
        </div>
      </section><!-- END EDU -->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
            <li class="list-inline-item">
              <i class="far fa-cannabis"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>
        </div>
      </section>

     

      

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="http://localhost:81/FTWD1801.PHPWEB/nampt/cv1/asset/frontend/js/resume.min.js"></script>

  </body>

</html>
