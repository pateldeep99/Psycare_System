<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>about</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/about.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css">
	<!-- nav CSS -->
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
                              <a class="dropdown-item" href="../php/commontestquestion_quiz.php">Common Quiz
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
                        <li><a class="nav-link active" href="#">About</a></li>
                        <?php
            session_start();
            if(isset($_SESSION["email"]))
            {
            ?>
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
            <?php
            }
            else
            {
            ?>
            <li><a class="nav-link" href="../php/login.php">Login</a></li>
            <?php
            }
            ?>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

		<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							<p class="quote">
								<q>Mental health is something that we all need to talk about, and we need to take the stigma away from it.<br>
									So let’s raise the awareness. Let’s let everybody know it’s OK to have a mental illness and addiction problem.</q><br>
							  <q>Looking for information about mental health, and where to find help?<br>
							    we provides anonymous, confidential and trustworthy information, 24 hours a day, 365 days a year.</q>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to epsycare </h2>
								<p>epsycare is a Tertiary Care Center for Psychiatric, Psychological, Social and Occupational problems. We specialise in Psychological Testing, Wellness Management and Rehabilitation Services.
									 epsycare is an in-house fully functional facility that offers complete solutions for all psychiatric long and short-term treatment.</p>
								<p>Now-a-days people have many problems which disturbs their mental health. We had developed a system related to mental health which can analyse human stress level. It displays the stress level and provides required steps to be taken according to stress level like meditation and consultancy. </p>
								
							</div>
							<div><img src="../images/img/img-1.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->



<br>
<br>


<h3 class="h31">Our Vision</h3>
<div class="miss1" >
  <div><img src="../images/img/img-2.jpg" class="miss"></div>
  <div>
<p class="mission">Our vision is for a world with good mental health for all.
   Our mission is to help people understand, protect and sustain their mental health.
   Prevention is at the heart of what we do, because the best way to deal with a crisis is to prevent it from happening in the first place.
</p></div>
</div>
<br>
<br>

<p class="quote">
<q>Your mental health is just as important as your physical health.<br>
   We’re here to share trusted and compassionate information to help you find a happier,
   <br> more balanced life.</q>
</p>
<br>
<br>


<h3 class="h31">Our Feature</h3>
<div class="features">
  <img src="../images/img/about-img-02.jpg">
<div>
<ul class="features1">
  <li>Mental Health Help (i.e. directory of mental health services and organizations)</li>
  <li>Info Sheets: Information about a variety of mental health conditions and topics.</li>
  <li>Screening Tools: Find out if you or a loved one has a mental health concern with our free, online screening tools.</li>
  <li>Events Calendar: Information about mental health events in your area.</li>
  <li>News Feed: Information about the latest mental health news.</li>
  <li>Research directory: Information about research studies in your area.</li>
</ul>
</div>
</div>
<br>
<br>

<h3 class="h31"> Our Team</h3>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/team/d00.jpg" alt="deep">
      <div class="container6">
        <h2>Patel Deep</h2>
        <p class="title">Computer Engineer</p>
        <p>pateldeep3660@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/team/dd.jpg" alt="devarshi">
      <div class="container6">
        <h2>Vaidya Devarshi</h2>
        <p class="title">Computer Engineer</p>
        <p>devarshivaidya2307@gmail.com</p>
			</div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/team/d11.jpg" alt="deep">
      <div class="container6">
        <h2>Deep Nanvati</h2>
        <p class="title">Computer Engineer</p>
        <p>deep15nanavati@gmail.com</p>
			</div>
    </div>
  </div>


<div class="column">
	<div class="card">
		<img src="../images/team/uu.jpg" alt="utsav">
		<div class="container6">
			<h2>Shah Utsav</h2>
			<p class="title">Computer Engineer</p>
			<p>utsavshah211@gmail.com</p>
		</div>
	</div>
</div>
</div>
<br>
<br>
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
