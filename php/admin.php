<?php
    include 'db.php';
    session_start();
    if(isset($_SESSION['name']))
    {
        header("location:login.php");
    }
    if(isset($_SESSION["email"]))
	{
		header("location:admin_dashboard.php");
    }
    
    $ref=@$_GET['q'];
    if(isset($_POST['submit']))
	{	
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = stripslashes($email);
        $email = addslashes($email);
        $password = stripslashes($password); 
        $password = addslashes($password);

        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password);
        
        $result = mysqli_query($connection,"SELECT email FROM admin WHERE email = '$email' and password = '$password'") or die('Error');
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            session_start();
            if(isset($_SESSION['email']))
            {
                session_unset();
            }
            $_SESSION["admin"] ='admin';
            $_SESSION["email"] = $email;
            header("location:admin_dashboard.php");
        }
        else
        {
            echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
            header("refresh:0;url=admin.php");
        }
    }
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Admin Login</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../css/login.css">

	</head>

	<body>
    <div class="hero">
        <div class="form-box">
            <h1 class="heading">Admin Panel</h1>
            <form id="login" class="input-group" method="post" action="admin.php"  enctype="multipart/form-data">
                <input type="text" name="email"  class="input-field" placeholder="Email ID" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <!---<a class="toggle-btn2" href="forgotpass.html">Forgot Password?</a>--->
                <button type="submit" name="submit"  class="submit-btn">Log In</button>
            </form>
        </div>
    </div>
		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>