<?php
    include 'db.php';
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:login.php");
    }
    if(!(isset($_SESSION['email'])))
    {
        header("location:admin_login.php");
    }
    else
    {
        $email = $_SESSION['email'];
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
    <title>User Dashbord</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
        <meta charset="UTF-8">
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
                              <a class="dropdown-item active" href="../php/user_common_dashboard.php">Dashboard</a>
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
        <div class="sidebar">
            <a href="user_common_dashboard.php">Common Test history</a>
            <a href="user_individual_dashboard.php">Individual Test history</a>
            <a class="active" href="user_consultancy_dashboard.php">Consultancy</a>
        </div>
        <div class="content">
        <?php
        $sql="SELECT * FROM booking WHERE userid = ".$_SESSION['id'];
		$result = mysqli_query($connection,$sql)  or die('Error');
        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
        <tr>
           <td><center><b>S.N.</b></center></td>
           <td><center><b>Doctor Name</b></center></td>
           <td><center><b>Doctor Contact</b></center></td>
           <td><center><b>Patient name</b></center></td>
           <td><center><b>Email</b></center></td>
           <td><center><b>Dates</b></center></td>
           <td><center><b>Time</b></center></td>
        </tr>';
        $c=1;
        while($row  = $result->fetch_assoc()) {
            $name 	= $row["dname"];
		    $contact = $row["dcontact"];
            $pname=$row["pname"];
            $email=$row["email"];
            $dates=$row["dates"];
            $time=$row["time"];
            echo "<tr>
            <td><center>".$c++."</center></td>
            <td><center>".$name."</center></td>
            <td><center>".$contact."</center></td>
            <td><center>".$pname."</center></td>
            <td><center>".$email."</center></td>
            <td><center>".$dates."</center></td>
            <td><center>".$time."</center></td>
            </tr>";
        }
        $c=0;
        echo '</table></div></div>';
        ?>
        </div>

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