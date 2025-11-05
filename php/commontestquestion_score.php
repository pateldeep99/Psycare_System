<?php 
session_start();
?>
<html>
<head>
	<title>Commantest Quiz</title>
	<link rel="stylesheet" href="../CSS/Score.css">


	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
    <link rel="stylesheet" href="../css/custom.css">
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
                        <li><a class="nav-link" href="../php/index.php">Home</a></li>
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">E-Checkup</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item active" href="../php/commontestquestion_quiz.php">Common Quiz
                              </a>
                              <a class="dropdown-item" href="../php/Echeckup.php">Individual Quiz</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">Meditation</a>
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
						<li class="nav-item dropdown">
						    <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown"><?php  if (isset($_SESSION['name'])) ?>
							
										<strong>
											<?php echo $_SESSION['name']; ?>
										</strong></a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/user_common_dashboard.php">Dashboard</a>
                              <a class="dropdown-item" href="../php/Profile_update.php">Edit Profile</a>
                              <a class="dropdown-item" href="../php/logout.php">Logout</a>
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->


				<div class="card text-center border-0"> 
					<div class="card-body">
						<h2 id="id1">Your Result</h2>
						<p id="id2">Congratulations You have completed Common  test succesfully.</p>
							<!-- depression score & result -->
							<p id="id3">Your Depression Disorder Score:<?php echo $_SESSION['depressionscore']; ?>%
							<?php if($_SESSION['depressionscore'] <= 35) : ?>
								<h4 id="id4">You have low level depression disorder</h4>

							<?php  elseif($_SESSION['depressionscore'] > 35 &&$_SESSION['depressionscore'] <= 65) :	?>
							<h4 id="id5">You have medium level depression disorder</h4>
						
							<?php else:	?>
							<h4 id="id6">You have High level depression disorder</h4>
							<?php endif; ?>
						</p>
						<?php unset($_SESSION['depressionscore']); ?>

						<!-- bipolar score & result -->
                        <p id="id3">Your Bipolar Disorder Score:<?php echo $_SESSION['bipolarscore']; ?>%
							<?php if($_SESSION['bipolarscore'] <= 35) : ?>
								<h4 id="id4">You have low level bipolar disorder</h4>

							<?php  elseif($_SESSION['bipolarscore'] > 35 &&$_SESSION['bipolarscore'] <= 65) :	?>
							<h4 id="id5">You have medium level bipolar disorder</h4>
						
							<?php else:	?>
							<h4 id="id6">You have High level bipolar disorder</h4>
							<?php endif; ?>
						</p>
						<?php unset($_SESSION['bipolarscore']); ?>

						<!-- anxiety score & result -->
						<p id="id3">Your Anxiety Disorder Score:<?php echo $_SESSION['anxietyscore']; ?>%
							<?php if($_SESSION['anxietyscore'] <= 35) : ?>
								<h4 id="id4">You have low level anxiety disorder</h4>

							<?php  elseif($_SESSION['anxietyscore'] > 35 &&$_SESSION['anxietyscore'] <= 65) :	?>
							<h4 id="id5">You have medium level anxiety disorder</h4>
						
							<?php else:	?>
							<h4 id="id6">You have High level anxiety disorder</h4>
							<?php endif; ?>
						</p>
						<?php unset($_SESSION['anxietyscore']); ?>

						<!-- personality score & result  -->
						<p id="id3">Your Personality Disorder Score:<?php echo $_SESSION['personalityscore']; ?>%
							<?php if($_SESSION['personalityscore'] <= 35) : ?>
								<h4 id="id4">You have low level personality disorder</h4>

							<?php  elseif($_SESSION['personalityscore'] > 35 &&$_SESSION['personalityscore'] <= 65) :	?>
							<h4 id="id5">You have medium level personality disorder</h4>
						
							<?php else:	?>
							<h4 id="id6">You have High level personality disorder</h4>
							<?php endif; ?>
						</p>
						<?php unset($_SESSION['personalityscore']); ?>

						<!-- eating score and result  -->
						<p id="id3">Your Eating Disorder Score:<?php echo $_SESSION['eatingscore']; ?>%
							<?php if($_SESSION['eatingscore'] <= 35) : ?>
								<h4 id="id4">You have low level eating disorder</h4>

							<?php  elseif($_SESSION['eatingscore'] > 35 &&$_SESSION['eatingscore'] <= 65) :	?>
							<h4 id="id5">You have medium level eating disorder</h4>
						
							<?php else:	?>
							<h4 id="id6">You have High level eating disorder</h4>
							<?php endif; ?>
						</p>
						<?php unset($_SESSION['eatingscore']); ?>

						<!-- psychotic score and result  -->
						<p id="id3">Your Psychotic Disorder Score:<?php echo $_SESSION['psychoticscore']; ?>%
							<?php if($_SESSION['psychoticscore'] <= 35) : ?>
								<h4 id="id4">You have low level psychotic disorder</h4>

							<?php  elseif($_SESSION['psychoticscore'] > 35 &&$_SESSION['psychoticscore'] <= 65) :	?>
							<h4 id="id5">You have medium level psychotic disorder</h4>
						
							<?php else:	?>
							<h4 id="id6">You have High level psychotic disorder</h4>
							<?php endif; ?>
						</p>
						<?php unset($_SESSION['psychoticscore']); ?>

						<!-- post traumatic score and result  -->
						<p id="id3">Your Post traumatic Disorder Score:<?php echo $_SESSION['posttraumaticscore']; ?>%
							<?php if($_SESSION['posttraumaticscore'] <= 35) : ?>
								<h4 id="id4">You have low level  post-traumatic  disorder</h4>

							<?php  elseif($_SESSION['posttraumaticscore'] > 35 &&$_SESSION['posttraumaticscore'] <= 65) :	?>
							<h4 id="id5">You have medium level  post-traumatic  disorder</h4>
						
							<?php else:	?>
							<h4 id="id6">You have High level  post-traumatic  disorder</h4>
							<?php endif; ?>
						</p>
						<?php unset($_SESSION['posttraumaticscore']); ?>
					</div>
				</div>
				<div>
						<a href="../php/Echeckup.php"><button class="but">Take a individual test</button></a>
				</div>

				 <!-- Start Footer -->
  <footer class="footer-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="../php/index.php">Mental Health Lab!</a> Design By : <a href="epsycare16@gmail.com">Psycare Solution corp.</a></p>
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