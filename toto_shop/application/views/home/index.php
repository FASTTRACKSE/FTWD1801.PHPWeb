
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>cv-Võ Thị Hoài</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/font-awesome.min.css">

		<!--flat icon css-->
		<link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="http://localhost/www/CodeIgniter/assets1/front_end/assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://localhost/www/CodeIgniter/assets1/front_end/https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="http://localhost/www/CodeIgniter/assets1/front_end/index.html">Hoài</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                <li class=" smooth-menu active"></li>
			                    <li class=" smooth-menu"><a href="#aboutme">About me</a></li>
			                    <li class=" smooth-menu"><a href="#education">education</a></li>
			                    <li class="smooth-menu"><a href="#skills">skills</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->
	
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>hi <span>,</span> i am <br> Hoai <br>    </h2>
							<!--<p>ui/ux designer and web developer</p>-->
							<!--<a href="http://localhost/www/CodeIgniter/assets1/front_end/assets/download/browney.txt" download>download resume</a>-->
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--about start -->
		<section id="aboutme" class="about">
			<div class="container">
				<div class="section-heading text-center">
				<h2>about me</h2>
			</div>
				<div class="about-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-txt">
								<h3>
									<?=$aboutme['name']?> 
									<?=$aboutme['detail']?>
								</h3>
								<div class="row">
									<div class="col-sm-3">
										<div class="single-about-add-info">
											<h3>phone</h3>
											<p><?=$aboutme['phone']?></p>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="single-about-add-info">
											<h3>email</h3>
											<p><?=$aboutme['email']?></p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>address</h3>
											<p><?=$aboutme['address']?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-offset-1 col-sm-5">
							<div class="single-about-img">
								<img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/36694732_946552815516663_8034078571636981760_n.jpg?_nc_cat=0&oh=38bd8779a1a7310ad9547f7fc4cf5d33&oe=5C286AE2">
								<div class="about-list-icon">
									<ul>
										<li>
											<a href="https://www.facebook.com/vothi.hoai.1">
												<i  class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="#">
												<i  class="fa fa-dribbble" aria-hidden="true"></i>
											</a>
											
										</li><!-- / li -->
										<li>
											<a href="#">
												<i  class="fa fa-twitter" aria-hidden="true"></i>
											</a>
											
										</li><!-- / li -->
										<li>
											<a href="#">
												<i  class="fa fa-linkedin" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="#">
												<i  class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										
										
									</ul><!-- / ul -->
								</div><!-- /.about-list-icon -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</section><!--/.about-->
		<!--about end -->
		
		<!--education start -->
		<section id="education" class="education">
			<div class="section-heading text-center">
				<h2>education</h2>
			</div>
			<div class="container">
				<div class="education-horizontal-timeline">
					<div class="row">
		         <?php foreach ($education as $item) { ?>
						<div class="col-sm-4">
							<div class="single-horizontal-timeline">
								<div class="experience-time"><br>
									<h2><?=$item['year_start']?>-<?=$item['year_end']?></h2>
								</div><!--/.experience-time-->
								<div class="timeline-horizontal-border">
									<i class="fa fa-circle" aria-hidden="true"></i>
									<span class="single-timeline-horizontal"></span>
								</div>
								<div class="timeline">
									<div class="timeline-content">
										<h4 class="title">
											<?=$item['name']?>
										</h4>
									</div><!--/.timeline-content-->
								</div><!--/.timeline-->
							</div>
						</div>
						<?php }?>
			</div>
					</div>
					</div>
				</section>
<br>
		<!--skills start -->
		<section id="skills" class="skills">
				<div class="skill-content">
					<div class="section-heading text-center">
						<h2>skills</h2>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="single-skill-content">
									<div class="barWrapper">
										<span class="progressText">HTML5</span>
										<div class="single-progress-txt">
											<div class="progress ">
												<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="10" aria-valuemax="100" style="">
													  
												</div>
											</div>
											<h3>75%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">CSS3</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="10" aria-valuemax="100" style="">
												   
											   </div>
											</div>
											<h3>50%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">JQUERY</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="10" aria-valuemax="100" style="">
												    
											   </div>
											</div>
											<h3>50%</h3>	
										</div>
									</div><!-- /.barWrapper -->
								</div>
							</div>
							<div>
							<div class="col-md-6" style="margin-left: 600px; margin-top: -350px;">
								<div class="single-skill-content">
									<div class="barWrapper">
										<span class="progressText">JAVASCRIPT</span>
										<div class="single-progress-txt">
											<div class="progress ">
												<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="10" aria-valuemax="100" style="">
													
												</div>
											</div>
											<h3>50%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">BOOTSTRAP</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="10" aria-valuemax="100" style="">    
											   </div>
											</div>
											<h3>100%</h3>	
										</div>
									</div><!-- /.barWrapper -->
									<div class="barWrapper">
										<span class="progressText">PHP</span>
										<div class="single-progress-txt">
											<div class="progress ">
											   <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="10" aria-valuemax="100" style="">    
											   </div>
											</div>
											<h3>90%</h3>	
										</div>
									</div><!-- /.barWrapper -->
								</div>
								</div>
							</div>
						</div><!-- /.row -->
					</div>	<!-- /.container -->		
				</div><!-- /.skill-content-->

		</section><!--/.skills-->
		<!--skills end -->

		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; copyright yourname. design and developed by <a href="http://localhost/www/CodeIgniter/assets1/front_end/https://www/CodeIgniter.themes1ine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/bootsnav.js"></script>
		
		<!-- jquery.sticky.js -->
		<script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/jquery.sticky.js"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/progressbar.js"></script>

		<!-- appear js -->
		<script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/jquery.appear.js"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="http://localhost/www/CodeIgniter/assets1/front_end/assets/js/custom.js"></script>
        
    </body>
	
</html>