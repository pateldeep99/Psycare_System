<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Self-Meditation</title>
	<link rel="stylesheet" href="../CSS/Echeckup.css">
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
    <link rel="stylesheet" href="../css/med.css">

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
                              <a class="dropdown-item active" href="../php/self_meditation.php">self Motivation
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
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">   <?php  if (isset($_SESSION['name'])) ?>
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

			
			<h1>Self Meditation</h1>

			<div class="card text-center border-0">

				<!-- this code is for depression checkup -->
				<div class="card-body">
					<h2 class="head">Depression illness Meditation</h2>
					<div class="Checkup">
							<!-- image for better understanding -->
							<img src="../IMAGES/Depression.jpg" alt="Image of Depression disorder Personality">
					</div>
					<div class="desc">
						<!-- description for depression disorder -->
						 <p>Depression causes feelings of sadness and/or a loss of interest in activities you once enjoyed. It can lead to a variety of emotional and physical problems and can decrease your ability to function at work and at home.</p>
					</div>	
					<a href="../php/depression.php"><button class="button">Take a Meditation</button></a>			
				</div>	

				<!-- this code is for bipolar checkup -->
				<div class="card-body">
					<h2 class="head">Bipolar illness Meditation</h2>
					<div class="Checkup">
						<!-- image for better understanding -->
						<img src="../IMAGES/Bipolar.jpg" alt="Image of Bipolar disorder Personality">
					</div>
			  		<div class="desc">
						<!-- description for Bipolar disorder-->
						<p>Bipolar disorder is a mood disorder characterized by periods of abnormally elevated mood known as mania. These periods can be mild (hypomania) or they can be so extreme as to cause marked impairment with a person's life, require hospitalization, or affect a person's sense of reality.</p>
					</div>  
					<a href="../PHP/bipolar.php"><button class="button">Take a Meditation</button></a>	
				</div>
		
				<!-- this code is for Anxiety checkup -->
				<div class="card-body">
					<h2 class="head">Anxiety illness Meditation</h2>
					<div class="Checkup">
						<!-- image for better understanding -->
						<img src="../IMAGES/Anxiety.png" alt="Image of Anxiety disorder Personality">
					</div>
					<div class="desc">
						<!-- description for anxiety disorder -->
						<p>Anxiety is a common emotion when dealing with daily stresses and problems. But when these emotions are persistent, excessive and irrational, and affect a person’s ability to function, anxiety becomes a disorder. There are different types of anxiety disorders, including phobias, panic and stress disorders, and obsessive compulsive disorder.</p>
					</div>  
					<a href="../PHP/anxity.php"><button class="button">Take a Meditation</button></a>			
				</div>		

				<!-- this code is for Personality checkup -->
				<div class="card-body">
					<h2 class="head">Personality illness Meditation</h2>
					<div class="Checkup">
						<!-- image for better understanding -->
						<img src="../IMAGES/Personality.jpg" alt="Image of personality disorder Personality">
					</div>
					<div class="desc">
						<!-- description for Personality  disorder -->
						<p>A personality disorder is a type of mental disorder in which you have a rigid and unhealthy pattern of thinking, functioning and behaving. A person with a personality disorder has trouble perceiving and relating to situations and people. This causes significant problems and limitations in relationships, social activities, work and school.</p>
					</div>  
					<a href="../php/personality.php"><button class="button">Take a Meditation</button></a>			
				</div>		

				<!-- this code is for Eating checkup -->
				<div class="card-body">
					<h2 class="head">Eating illness Meditation</h2>
					<div class="Checkup">
						<!-- image for better understanding -->
						<img src="../IMAGES/Eating disorder.jpg" alt="Image of Eating disorder Personality">
					</div>
					<div class="desc">
						<!-- description for Eating disorder -->
						<p>Eating disorders are a range of psychological conditions that cause unhealthy eating habits to develop. They might start with an obsession with food, body weight, or body shape. In severe cases, eating disorders can cause serious health consequences and may even result in death if left untreated.</p>
					</div>  
					<a href="../PHP/eatingdisorder.php"><button class="button">Take a Meditation</button></a>			
				</div>	
				
				<!-- this code is for Psychotic checkup -->
				<div class="card-body">
					<h2 class="head">Psychotic illness Meditation</h2>
					<div class="Checkup">
						<!-- image for better understanding -->
						<img src="../IMAGES/Psychotic.jpg" alt="Image of Psychotic disorder Personality">
					</div>
					<div class="desc">
						<!-- description for Psychotic disorder -->
						<p>Psychotic disorders are a group of serious illnesses that affect the mind. They make it hard for someone to think clearly, make good judgments, respond emotionally, communicate effectively, understand reality, and behave appropriately.</p>
					</div>  
					<a href="../PHP/psychotic.php"><button class="button">Take a Meditation</button></a>			
				</div>	
				
				<!-- this code is for Post-traumatic checkup -->
				<div class="card-body">
					<h2 class="head">Post-traumatic illness Meditation</h2>
					<div class="Checkup">
						<!-- image for better understanding -->
						<img src="../IMAGES/Post truma.jpg" alt="Image of Psychotic disorder Personality">
					</div>
					<div class="desc">
						<!-- description for Post-traumatic  disorder -->
						<p>Post-traumatic stress disorder (PTSD) is a mental health condition that's triggered by a terrifying event either experiencing it or witnessing it. Symptoms may include flashbacks, nightmares and severe anxiety, as well as uncontrollable thoughts about the event.</p>
					</div>  
					<a href="../PHP/ptsd.php"><button class="button">Take a Meditation</button></a>			
				</div>	
			</div>
    

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