<?php 
  require 'config/database.php';

  
  if(isset($_POST['submit'])){

     //Collecting data from the submit form
     $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $username = filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
     $createpassword = filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $confirmpassword = filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $avatar = $_FILES['avatar'];
     $is_admin = filter_var($_POST['userrole'],FILTER_SANITIZE_NUMBER_INT);



     if(!$firstname){
        $_SESSION['add-user']="Please Enter Your First Name";
     }else if(!$lastname){
        $_SESSION['add-user']="Please Enter Your Last Name";
     }else if(!$username){
        $_SESSION['add-user']="Please Enter Your Username";
     }else if(!$email){
        $_SESSION['add-user']="Please Enter Your Email";
     }else if(strlen($createpassword)<8 || strlen($confirmpassword)<8){
        $_SESSION['add-user']="Password must be atleast 8 Characters Long";
     }else if(!$avatar['name']){
        $_SESSION['add-user']="Enter Avatar";
     }else{
      
         if($createpassword !== $confirmpassword){
            $_SESSION['add-user']="Passwords Do not match";
         }else{
           
            $hashedpassword = password_hash($createpassword,PASSWORD_DEFAULT);

      
            $user_check_query = "select * from users where username='$username' or email='$email'";
            $user_check_result = mysqli_query($conn,$user_check_query) ;
            if(mysqli_num_rows($user_check_result)>0){
              $_SESSION['add-user']="Username or Email already exists";
            }else{
        
              $time = time();
              $avatar_name = $time . $avatar['name'];
              $avatar_temp_name = $avatar['tmp_name'];
              $avatar_path = '../images/avatars/' . $avatar_name;

              $allowed_files = ['png','jpg','jpeg'];
              $extention = explode('.',$avatar_name);
              $extention = end($extention);

              if(in_array($extention,$allowed_files)){
                if($avatar['size']<1000000){
                   
                   move_uploaded_file($avatar_temp_name,$avatar_path);
                }else{
                  $_SESSION['add-user']="File size too big. Upload less than 1mb";
                }
              }else{
                  $_SESSION['add-user']="File should be png,jpg or jepg";
              }
            }
         }
     } 
     if(isset($_SESSION['add-user'])){
        echo "error in line 69";
        header('location:'. ROOT_URL . '/admin/add-user.php');
        die();
     }else{
        $insert_user = "insert into users (firstname,lastname,username,email,password,avatar,is_admin) values('$firstname','$lastname','$username','$email','$hashedpassword','$avatar_name','$is_admin')";
        $insert = mysqli_query($conn,$insert_user);
        if(!mysqli_errno($conn)){
          $_SESSION['add-user-success']="New user $firstname $lastname added";
          header('location:'.ROOT_URL.'admin/manage-users.php');
          die();
        }
     }
  }else{
   header('location:'.ROOT_URL.'admin/add-user.php');
   die();
   
  }
