<?php
  session_start();
  include "db.php";
  $id=$_SESSION['id'];   
  $str = "SELECT * FROM user WHERE id='".$_SESSION['id']."'";
  $result = mysqli_query($connection,$str);
  $row=mysqli_fetch_array($result);

  $name=(isset($_POST['name']) && $_POST['name']!='')? $_POST['name'] : $row[1] ;
  $email=(isset($_POST['email']) && $_POST['email']!='')? $_POST['email'] : $row[2];
  $password=(isset($_POST['password']) && $_POST['password']!='')? $_POST['password'] : $row[3];
  $select= "select * from user where id='$id'";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
            <link rel="stylesheet" href="../css/dashboard.css">
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
    <link rel="stylesheet" href="../css/profile_update.css">

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
                        <li><a class="nav-link" href="../php/about.php">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">
                            <?php  if (isset($_SESSION['name'])) ?>
                            
                                        <strong>
                                            <?php echo $_SESSION['name']; ?>
                                        </strong>

                    </a>

                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/user_common_dashboard.php">Dashboard</a>
                              <a class="dropdown-item active" href="../php/Profile_update.php">Edit Profile</a>
                              <a class="dropdown-item" href="../php/logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    <div class="hero">
        <div class="form-box">
            <h1 class="heading">Edit Profile</h1>
            <form id="login" class="input-group" method="post" action="admin.php"  enctype="multipart/form-data">
                <input type="text" name="name" class="input-field" value="<?php echo $name; ?>">
                  <input type="email" name="email"  class="input-field" value="<?php echo $email; ?>">
                  <input type="password"  name="password" class="input-field" value="<?php echo $password;?>">
                  <button type="submit" name="submit" class="submit-btn">Update</button>
            </form>
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