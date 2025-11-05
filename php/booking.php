<?php
include 'db.php';
    session_start();
	if(!isset($_SESSION["name"]))
	{
		header('location: login.php'); 
		
	}
?>
<!-- result -->
<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 					
							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";
							$result = mysqli_query($connection,$sql)  or die('Error');
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $contact 	= $row["contact"];
							         $userid = $row["userid"];
							    }
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
    <title>Book an Appointment</title>
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
    <link rel="stylesheet" href="../css/booking.css">

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

	<div class="hero">
        <div class="form-box">
            <h2 class="heading">Book an Appointment</h2>
            <form action="" id="login" class="input-group" method="post"  enctype="multipart/form-data">
				Dr. Name: <input type="text" class="input-field1" name="dname" value="<?php echo $name; ?>" >
				Contact: <input type="text" class="input-field1" name="dcontact" value="<?php echo $contact; ?>" />
				Your Name: <input type="text" class="input-field1" name="pname" value="<?php echo $_SESSION['name'] ?>" required>
				Contact: <input type="text" class="input-field1" name="pcontact" value="" required>
				E-mail: <input type="email"  class="input-field1" name="email" value="<?php echo $_SESSION['email'] ?>" required>
				Address: <input type="text" class="input-field1" name="address" value="" required>
				Date: <input type="date" class="input-field1" name="dates" value="" required>
				Time: <select name="time" class="input-field1" required>
							<option value="11.00am">11.00am</option>
							<option value="03.00pm">03.00pm</option>
					  </select>
				<input type="hidden" class="input-field1" name="userid" value="<?php echo $_SESSION['id']; ?>">
                <button name="submit" type="submit" name="submit"  class="submit-btn">Confirm</button>
          

					<?php
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,userid,dcontact,pname,pcontact,email,address,dates,time)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["time"] . "')";

							if ($connection->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}
						}
					?> 
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
