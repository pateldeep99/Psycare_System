<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>Anxity Meditation</title>
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
<h1>Anxity</h1>
<!--quote-->
<h3><q>Inner peace begins the moment you choose not to allow another person or event to control your emotions.</q></h3>
<!--col1-->
<div class="column">
        <iframe class="i" src="https://www.youtube.com/embed/85QY_d-8J2M"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Anxiety: A Cancer of the Mind</p>
</div>

<div class="column">
  <iframe class="i" src="https://www.youtube.com/embed/pXH34vKo5Ds"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <p>Psychology of Anxiety</p>
</div>

<div class="column">
        <iframe class="i" src="https://www.youtube.com/embed/fsky5WShpN8"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>TOP MEDICATIONS FOR TREATING ANXIETY</p>
</div>

<!--col2-->
<div class="column">
  <iframe class="i" src="https://www.youtube.com/embed/-EXIWB_buxo"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>What is Anxiety? | Symptoms of Anxiety and treatment for Anxiety</p>
</div>

<div class="column">
  <iframe class="i" src="https://www.youtube.com/embed/dMpzvw4yhB8"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <p>When Anxiety Attacks</p>
</div>

<div class="column">
        <iframe class="i" src="https://www.youtube.com/embed/3I5L2otW4r8"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>Break Free From Anxiety and Fear </p>
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
