<?php 
	include 'db.php';
	session_start(); 
	//Set Question Number
	$number = isset($_GET['n']) ? $_GET['n'] : 1;
	
	//Query for the Question
	$query = "SELECT * FROM post_traumatic_question WHERE question_number = ".$number;

	 //Get the question
	$result = mysqli_query($connection,$query);

	$question = mysqli_fetch_assoc($result);

	$query = "SELECT * FROM options";
	$options = [];
	
	$result = $connection->query($query);
	// var_dump($result->fetch_assoc());
	while($row = $result->fetch_assoc()) {
		$options[] = $row;
	}

	// Get Total questions
	$query = " SELECT * FROM post_traumatic_question";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Post-traumatic quiz</title>
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
<!-- css in this php file -->
<style>
	body
	{
		padding: 0;
		margin: 0;
	}
	.card-body
	{
 	    background-color: white;
  		box-shadow: 0px 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  		margin:50px;
  		margin-left: 200px;
  		margin-right: 200px;
	}
	h3
	{
		color: #8f4ba2;
	}
	h3:after
	{
		content: "";
		height: 4px;
		background-color: #ddd;
		width: 60px;
		display: block;
		margin: auto;
		margin-top: 1.5rem;
		margin-bottom: 2rem;
	}

	.myProgress
	{
		width: 70%;
		background-color: lightpink;
		margin: 2rem auto 0;
		border-radius: 50px;
	}

	#myBar
	{
		width: <?php echo $number * 10; ?>%;
		height: 30px;
		background-color: #5cc25f;
		border-radius: 50px;
	}

	button
	{
		background:#d3d3d3;
		border: none;
		border-radius: 15px;
		color:black;
		font-weight: bold;
		font-family: system-ui;
		font-size:25px;
		padding: 14px 30px;
		margin:5px;
		text-align: center;
		text-decoration: none;
	}

	button:hover
	{
		background:  linear-gradient(to right, #00aaee, #77dd77);
		border-radius: 15px;
		border: none;
		text-decoration: none;
		outline: none;
	}

	p
	{
		font-size: 20px;
		color:#836889;
	}
</style>

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
					<form action="post-traumatic_process.php" method="GET">
					<div class="card-body">
						<h3>Question <?php echo $number; ?></h3>
						<p><?php echo $question['question_text']; ?> </p><br>
						<?php 
						foreach ($options as $value) {
						?>
						<button onclick="move()"  name="answer" value=" <?php echo $value["value"]; ?> "><?php echo $value["option"];?></button>
						<?php
							}
						?>
						<br>
							<input type="hidden" name="n" value="<?php echo $number; ?>">
							</form>
					</div>

					<div class="card-footer border-top-0 border-bottom-0" style="background-color: white">

							<div class="myProgress">
								<div id="myBar">
									<div><?php echo $number; ?>/<?php echo $total_questions; ?></div>
								</div>
							</div>
							<br>
							<br>
					</div>
				</div>

<!-- javascript for progress bar  -->
<script>
var width = <?php echo $number * 10; ?>;
var id = null;
function move()
{
	if (width == 100) 
	{
		return;
	}
  var elem = document.getElementById("myBar");
  id = setInterval(frame, 10);
}
</script>

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