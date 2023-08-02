<?php 
 require 'config/database.php';
 if(isset($_POST['submit'])){
    $username = filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'],FILTER_SANITIZE_SPECIAL_CHARS);

    if(!$username){
        $_SESSION['signin']="Username Or Email Required";
    }elseif(!$password){
        $_SESSION['signin']="Password Required";
    }else{
        $fetch_user_query= "select * from users where username='$username' or email='$username' ";
        $fetch_data = mysqli_query($conn,$fetch_user_query) or die();
        if(mysqli_num_rows($fetch_data)==1){
            $user_record = mysqli_fetch_assoc($fetch_data);
            $db_password = $user_record['password'];
            if(password_verify($password,$db_password)){

               $_SESSION['user-id']=$user_record['id'];
               
               if($user_record['is_admin']==1){
                   $_SESSION['user_is_admin']=true;
               }

               header('location:'.ROOT_URL.'admin/');
            }else{
                $_SESSION['signin']="Check Input Credentials"; 
            }
        }else{
            $_SESSION['signin']="User Not Found"; 
        }
    }
    if(isset($_SESSION['signin'])){
        $_SESSION['signin-data']= $_POST;
        header('location:'.ROOT_URL.'signin.php');
        die();
    }
 }else{
    header('location:'.ROOT_URL.'signin.php');
    die();
 }
?>