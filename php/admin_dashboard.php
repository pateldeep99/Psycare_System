<?php
    include 'db.php';
    session_start();
    if(isset($_SESSION['name']))
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
<html>
    <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>PsyCare Admin</title>
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
                        <li> <?php if(@$_GET['q']==0); ?><a class="nav-link" href="admin_dashboard.php?q=0">Users</a></li>
                        <li> <?php if(@$_GET['q']==1); ?><a class="nav-link" href="admin_dashboard.php?q=1">Common Test Score</a></li>
                        <li> <?php if(@$_GET['q']==2); ?><a class="nav-link" href="admin_dashboard.php?q=2">Individual Test Score</a></li>
                        <li> <?php if(@$_GET['q']==4); ?><a class="nav-link" href="admin_dashboard.php?q=3">View appointment</a></li>
                        <li><a class="nav-link" href="admin_logout.php">Log out</a></li>
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
                    if(@$_GET['q']==0) 
                    {
                        echo "<h1> WELCOME TO User Data Page!!
                    </h1>";
                        $result = mysqli_query($connection,"SELECT * FROM user") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center><td><center><b>Email</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $email = $row['email'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$email.'</center></td><td><center><a title="Delete User" href="admin_process.php?demail='.$email.'"><b><span>Delete User</span></b></a></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }

                    if(@$_GET['q']==1) 
                    {
                        echo "<h1> WELCOME TO Comman Quiz History!!
                    </h1>";
                        $result = mysqli_query($connection,"SELECT * FROM history WHERE type ='common'")  or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center><td><center><b>score</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $score = $row['score'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$score.'</center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                    if(@$_GET['q']==2) 
                    {
                        echo "<h1> WELCOME TO Individual Quiz History!!
                    </h1>";
                        $result = mysqli_query($connection,"SELECT * FROM history WHERE type!='common' ")  or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center><td><center><b>Type</b></center><td><center><b>score</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $score = $row['score'];
                            $type = $row['type'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$type.'</center></td><td><center>'.$score.'</center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                   
                    }
                    if(@$_GET['q']==3) 
                    {
                    echo "<h1> WELCOME TO View appointment history!!
                    </h1>";
                    $sql="SELECT * FROM booking ";
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
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name   = $row["dname"];
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
                   
                    }
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