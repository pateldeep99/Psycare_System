<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- title of the current website page -->
		<title>News page</title>   
		<meta name="keywords" content="">
	    <meta name="description" content="">
	    <meta name="author" content="">    
		<!-- Adding External css -->
		<link rel="stylesheet" href="../css/News.css">
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
                            <a class="nav-link dropdown-toggle"  id="navbardrop" href="#" data-toggle="dropdown">E-Checkup</a>
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
                        <li><a class="nav-link active" href="#">News</a></li>
                        <li><a class="nav-link" href="../php/about.php">About</a></li>
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
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

			<!-- first main div class for image and paragraph in a website -->
			<div class="float-left">
						<!-- first image of website that represent that this a news web page -->
						<img src="../images/NEWS/news.jpg" alt="news" class="img1">
					
						<!-- pagaraph on news for better understanding -->
						<h1 align="center">Epsycare provide the latest studies, recommendations, and trending topics for you.It makes update to you in digital way. </h1>
			</div>			

			<!-- div class for first news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/diagnostics/36-india-inc-employees-battling-mental-health-issues-since-beginning-of-pandemic-shows-survey/78399587">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 1.jpg" alt="one employee is stress">
				</a>
			  <!-- div class for news heading -->
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/diagnostics/36-india-inc-employees-battling-mental-health-issues-since-beginning-of-pandemic-shows-survey/78399587">
				<!-- description of news heading  -->
					36% India Inc employees battling mental health issues since beginning of pandemic, shows survey
					</a>
				</div>  
			</div>		
			
			<!-- div class for second news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/diagnostics/iit-kanpurs-new-cognitive-science-department-to-discover-remedies-for-mental-health-concerns/79991889">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 2.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/diagnostics/iit-kanpurs-new-cognitive-science-department-to-discover-remedies-for-mental-health-concerns/79991889">
			<!-- description of news heading  -->
							IIT Kanpur’s new cognitive science department to discover remedies for mental health concerns
					</a>
				</div>  
			</div>		
			
			<!-- div class for third news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/policy/tobacco-the-forgotten-silent-killer-in-people-with-mental-health-conditions/80019335">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 3.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/policy/tobacco-the-forgotten-silent-killer-in-people-with-mental-health-conditions/80019335">
		    <!-- description of news heading  -->			
							Tobacco: The forgotten silent killer in people with mental health conditions
					</a>
				</div>  
			</div>	
			
			<!-- div class for fourth news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/industry/are-mental-health-professionals-skilled-enough-to-deliver-quality-healthcare-services/77610336">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 4.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/industry/are-mental-health-professionals-skilled-enough-to-deliver-quality-healthcare-services/77610336">
		    <!-- description of news heading  -->			
							Are mental health professionals skilled enough to deliver quality healthcare services?
					</a>
				</div>  
			</div>	
			
			
			<!-- div class for fifth news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/policy/aiims-to-hold-mental-health-sessions-in-schools/71873148">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 5.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/policy/aiims-to-hold-mental-health-sessions-in-schools/71873148">
		    <!-- description of news heading  -->			
						AIIMS to hold mental health sessions in schools for to acknowledge student about mental health
					</a>
				</div>  
			</div>	
			
			
			<!-- div class for sixth news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/industry/mental-illnesses-are-associated-with-a-lifelong-burden-of-obesity-diabetes-and-cardiovascular-disease-study/70292042">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 6.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/industry/mental-illnesses-are-associated-with-a-lifelong-burden-of-obesity-diabetes-and-cardiovascular-disease-study/70292042">
		    <!-- description of news heading  -->			
					Mental illnesses are associated with a lifelong burden of obesity, diabetes, and cardiovascular disease: study
					</a>
				</div>  
			</div>	
			
			<!-- div class for seventh news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/industry/what-india-must-do-to-solve-its-mental-health-crisis/74314862">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 7.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/industry/what-india-must-do-to-solve-its-mental-health-crisis/74314862">
		    <!-- description of news heading  -->			
							What India must do to solve its mental health crisis?
					</a>
				</div>  
			</div>	
			
			<!-- div class for eight news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/health-files/young-people-and-mental-health-in-a-changing-world/3287">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 8.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/health-files/young-people-and-mental-health-in-a-changing-world/3287">
		    <!-- description of news heading  -->			
							Young people and mental health in a changing world 
					</a>
				</div>  
			</div>	
			
			
			
			<!-- div class for nighth news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/diagnostics/illness-related-suicides-in-india-decrease-but-with-caveats/73580509">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 9.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/diagnostics/illness-related-suicides-in-india-decrease-but-with-caveats/73580509">
		    <!-- description of news heading  -->			
						Illness-related suicides in India decrease
					</a>
				</div>  
			</div>	
			
			<!-- div class for tenth news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/industry/the-death-of-traditional-preventive-care-the-rise-of-fitness-wearables/72934844">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 10.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/industry/the-death-of-traditional-preventive-care-the-rise-of-fitness-wearables/72934844">
		    <!-- description of news heading  -->			
						The death of traditional preventive care & the rise of fitness wearables
					</a>
				</div>  
			</div>	
			
			<!-- div class for 11 news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/health-it/univs-connect-with-students-to-help-cope-with-uncertainty/74958544">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 11.jpg" alt="one employee is stress">
				</a>
			  
			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/health-it/univs-connect-with-students-to-help-cope-with-uncertainty/74958544">
		    <!-- description of news heading  -->			
						Univs connect with students to help cope with uncertainty for better mental health
					</a>
				</div>  
			</div>	
			
			
			
			<!-- div class for 12 news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/diagnostics/anxiety-depression-among-patients-with-pre-existing-mental-health-conditions-on-the-rise-psychiatrists/75104409">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 12.jpg" alt="one employee is stress">
				</a>
  			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/diagnostics/anxiety-depression-among-patients-with-pre-existing-mental-health-conditions-on-the-rise-psychiatrists/75104409">
		    <!-- description of news heading  -->			
						Anxiety, depression among patients with pre-existing mental health conditions on the rise: Psychiatrists
					</a>
				</div>  
			</div>
			
			<!-- div class for 13 news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/industry/scenario-that-needs-to-change-for-mental-health-in-india/71516904">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 13.jpg" alt="one employee is stress">
				</a>
  			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/industry/scenario-that-needs-to-change-for-mental-health-in-india/71516904">
		    <!-- description of news heading  -->			
						Scenario that needs to change for mental health in India for better future of youth
					</a>
				</div>  
			</div>
			
			<!-- div class for 14 news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/industry/access-to-mental-healthcare-is-tough-for-50-of-people-study/71513353">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 14.jpg" alt="one employee is stress">
				</a>
  			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/industry/access-to-mental-healthcare-is-tough-for-50-of-people-study/71513353">
		    <!-- description of news heading  -->			
						Access to mental healthcare is tough for 50% of people: Study
					</a>
				</div>  
			</div>
			
			<!-- div class for 15 news -->
			<div class="news">
			<!-- anchor tag for hyperlink -->
				<a href="https://health.economictimes.indiatimes.com/news/industry/30-of-working-professionals-have-some-form-of-mental-emotional-risks-survey/71939454">
			<!-- image for better understanding of news	-->
					<img src="../images/NEWS/image 15.jpg" alt="one employee is stress">
				</a>
  			  	<div class="desc">
					<a href="https://health.economictimes.indiatimes.com/news/industry/30-of-working-professionals-have-some-form-of-mental-emotional-risks-survey/71939454">
		    <!-- description of news heading  -->			
		          30% of working professionals have some form of mental, emotional risks: Survey
					</a>
				</div>  
			</div>


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