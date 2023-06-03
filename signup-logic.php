<?php 
  require 'config/database.php';
  if(isset($_POST['submit'])){
     $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $username = filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
     $createpassword = filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $confirmpassword = filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $avatar = $_FILES['avatar'];
     echo "$firstname","$lastname","$username","$email","$createpassword","$confirmpassword";
    
  }else{
    header('location:'.ROOT_URL.'signup.php');
    die();
  }
?>