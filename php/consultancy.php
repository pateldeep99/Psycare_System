<?php 
	include 'db.php';
    session_start();
	if(!isset($_SESSION["name"]))
	{
		header('location: login.php'); 
		
	}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Consultancy</title>
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
                            <a class="nav-link dropdown-toggle"  id="navbardrop" href="#" data-toggle="dropdown">Meditation</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="../php/self_meditation.php">self Motivation
                              </a>
                              <a class="dropdown-item" href="../php/meditation_webinar.php">TED Talks</a>
                              <a class="dropdown-item" href="../php/yoga_meditation.php">Yoga</a>
                            </div>
                        </li>
                        <li><a class="nav-link active" href="#">Consultancy</a></li>
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
                            <a class="nav-link dropdown-toggle" id="navbardrop" href="#" data-toggle="dropdown">    <?php  if (isset($_SESSION['name'])) ?>
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

  

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                 $result = mysqli_query($connection,"SELECT * FROM doctor")  or die('Error');
                 echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                 <tr>
                    <td><center><b>S.N.</b></center></td>
                    <td><center><b>Name</b></center></td>
                    <td><center><b>Address</b></center></td>
                    <td><center><b>Contact</b></center></td>
                    <td><center><b>Email</b></center></td>
                    <td><center><b>Book</b></center></td>
                 </tr>';
                 $c=1;
                 while($row = mysqli_fetch_array($result)) 
                 {
                     $name = $row['name'];
                     $address = $row['address'];
                     $contact= $row['contact'];
                     $email=$row['email'];
                     $doc_id=$row['doc_id'];
                     echo "<tr>
                                <td><center>".$c++."</center></td>
                                <td><center>".$name."</center></td>
                                <td><center>".$address."</center></td>
                                <td><center>".$contact."</center></td>
                                <td><center>".$email."</center></td>
                            
                                <td><center><a href='booking.php?doc_id=".$doc_id."'>Book</a></center></td>

                                </tr>";
                 }
                 $c=0;
                 echo '</table></div></div>';              
                ?>
            </div>
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