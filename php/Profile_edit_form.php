<?php

  session_start();
 include "db.php";

 if(isset($_POST['submit']))
 {
    $id=$_SESSION['id'];   
    $str = "SELECT * FROM user WHERE id='".$_SESSION['id']."'";
    $result = mysqli_query($connection,$str);
    $row=mysqli_fetch_array($result);

    $name=(isset($_POST['name']) && $_POST['name']!='')? $_POST['name'] : $row[1] ;
    $email=(isset($_POST['email']) && $_POST['email']!='')? $_POST['email'] : $row[2];
    $password=(isset($_POST['password']) && $_POST['password']!='')? $_POST['password'] : $row[3];
    $select= "select * from user where id='$id'";
    $sql = mysqli_query($connection,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update user set name='$name',email='$email',password='$password' where id='$id'";
       $sql2=mysqli_query($connection,$update);
        if($sql2)
       { 
           $_SESSION['name'] = $name;
           /*Successful*/
           header('location:index.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>