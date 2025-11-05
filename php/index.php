<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>PsyCare</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/Score.css">



</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">E-Checkup</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/commontestquestion_quiz.php">Common Quiz
                              </a>
                              <a class="dropdown-item" href="../php/Echeckup.php">Individual Quiz</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  id="navbardrop" href="#" data-toggle="dropdown">Meditation</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/self_meditation.php">self Motivation
                              </a>
                              <a class="dropdown-item" href="../php/meditation_webinar.php">TED Talks</a>
                              <a class="dropdown-item" href="../php/yoga_meditation.php">Yoga</a>
                            </div>
                        </li>
				        <li><a class="nav-link" href="../php/consultancy.php">Consultancy</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">Information</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/mentalhealth.php">Mental Health</a>
                              <a class="dropdown-item" href="../php/psychology.php">Psychology</a>
                              <a class="dropdown-item" href="../php/psychotherapy.php">Psychotherapy</a>
                              <a class="dropdown-item" href="../php/psychologist.php">Psychologist</a>
                              <a class="dropdown-item" href="../php/psychiatrist.php">Psychiatrist</a>
                            </div>
                        </li>
                        <li><a class="nav-link" href="../php/News.php">News</a></li>
                        <li><a class="nav-link" href="../php/about.php">About</a></li>
						<?php
						session_start();
						if(isset($_SESSION["email"]))
						{
						?>
						  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">		<?php  if (isset($_SESSION['name'])) ?>
										<strong>
											<?php echo $_SESSION['name']; ?>
										</strong></a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="../php/user_common_dashboard.php">Dashboard</a>
                              <a class="dropdown-item" href="../php/Profile_update.php">Edit Profile</a>
                              <a class="dropdown-item" href="../php/logout.php">Logout</a>
                            </div>
                        </li>
						<?php
						}
						else
						{
						?>
						<li><a class="nav-link" href="../php/login.php">Login</a></li>
						<?php
						}
						?>
                    
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(../images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Mental Health Lab</h1>
								<p>You Can Try it! </p>
								<a class="btn dropdown-toggle" data-toggle="dropdown"">E-Checkup</a>
								<div class="dropdown-menu">
                              	<a class="dropdown-item" href="../php/commontestquestion_quiz.php">Common Quiz
                              	</a>
                              	<a class="dropdown-item" href="../php/Echeckup.php">Individual Quiz</a>
                            	</div>
							</div>
						</div>
					</div>
                    <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(../images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Improve you Mental Health</h1>
								<p>Here we can helping to you get well soon</p>
								<a class="btn dropdown-toggle" data-toggle="dropdown">Meditation</a>
								<div class="dropdown-menu">
                              		<a class="dropdown-item" href="../php/self_meditation.php">self Motivation
                              		</a>
                              		<a class="dropdown-item" href="../php/meditation_webinar.php">TED Talks</a>
                              		<a class="dropdown-item" href="../php/yoga_meditation.php">Yoga</a>
                            	</div>
							</div>
						</div>

					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(../images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>We are Expert in The Field of Mental Health</h1>
								<p>If you are in Trouble, We are here!</p>
								<a href="../php/consultancy.php" class="btn">Consultancy</a>
							</div>
						</div>
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Additional Feature -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Mental Health Treatment Requirement Prediction System</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
								    <img src="../images/mentalillness.jfif" width="100%">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<!---<h2> Mental Illness Checkup Predection System </h2>-->
								<p class="p1">This System Follow on machine learning base concept to predection people have required treatment of mantal health or people havan't required treatment of mantal health.We called it Predictive Profiling.</p>
								<h2>CLICK ON BUTTON AND USE</h2>
								<a href="https://psycare-prediction.herokuapp.com/"><button class="but"> Try It!</button></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Additinal Feature -->


	<!-- Start what we do -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>What We do?</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to Mental Health Lab </h2>
								<p class="p1">In today’s time human’s physical as well as psychological health is very important. People are more aware and taking more care of their physic but when it comes with psychological health, they take it lightly. This system gives us mental health check-up by using Facial Expression Recognition (FER) and it refers which steps to take if it shows any problem in your psychological health. </p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
								    <img src="../images/gallery-02.jpg" width="100%">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End what we do -->
    
    	<!-- Start why use it -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Why People use it?</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
                            <div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
								    <img src="../images/gallery-03.jpg" width="100%">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2>Problem of Daily Life</h2>
								<p class="p1">Now-a-days people have many problems which disturbs their mental health of human. Due to lots of stress on human mind, sometimes human take unwanted steps like suicide, murder, robbery, etc. People might get pressurized by their family, friends, higher authority, etc. and goes into the depression. In recent situation due to covid-19 many people suffer from panic, stress, loneliness, etc. which effects on their mental health and sometimes it effects on health.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End why use it -->

	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">Mental Health Lab!</a> Design By : <a href="epsycare16@gmail.com">Psycare Solution corp.</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<!-- ALL JS FILES -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script>
	<script src="../js/slider-index.js"></script>
	<script src="../js/smoothscroll.js"></script>
	<script src="../js/TweenMax.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
	<script src="../js/isotope.min.js"></script>
	<script src="../js/images-loded.min.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>
