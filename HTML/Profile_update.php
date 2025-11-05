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
    <<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Edit Profile</title>
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
    <link rel="stylesheet" href="../css/profile_update.css">

  </head>
<body>
    <div class="hero">
        <div class="form-box">
            <h1 class="heading">Edit Profile</h1>
                <form id="login" class="input-group" method="post" action="../php/Profile_edit_form.php">
                  <input type="text" name="name" class="input-field" value="<?php echo $name; ?>">
                  <input type="email" name="email"  class="input-field" value="<?php echo $email; ?>">
                  <input type="password"  name="password" class="input-field" value="<?php echo $password;?>">
                  <button type="submit" name="submit" class="submit-btn">Update</button>
                </form>
        </div>
    </div>
  </body>
</html>
