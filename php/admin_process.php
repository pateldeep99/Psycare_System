<?php
  include_once 'db.php';
  session_start();
  $email=$_SESSION['email'];

  if(isset($_SESSION['email']))
  {
        if(@$_GET['demail']) 
        {
        $demail=@$_GET['demail'];
        $result = mysqli_query($connection,"DELETE FROM user WHERE email='$demail' ") or die('Error');
        header("location:admin_dashboard.php?q=1");
        }
  }

?>
