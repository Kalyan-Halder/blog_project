<?php 
 require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalyan's Insights</title>
    <script
    src="https://kit.fontawesome.com/7376a8695f.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
     
    <!--======================================================================Nav========================================================-->

    <nav>
        <div class="container nav_container">
              <div class="logo">
                    <a href="index.php" class="nav_logo"><i class="fa-solid fa-k icon"></i>alyan's<i class="fa-solid fa-i icon"></i>nsights <i class="fa-solid fa-brain icon"></i></a>
              </div>
              <ul class="nav_items">
                <li><a href="<?php echo ROOT_URL?>blog.php">Blog</a></li>
                <li><a href="<?php echo ROOT_URL?>about.php">About</a></li>
                <li><a href="<?php echo ROOT_URL?>services.php">Services</a></li>
                <li><a href="<?php echo ROOT_URL?>contact.php">Contact</a></li>
                <li><a href="<?php echo ROOT_URL?>signin.php">Signin</a></li>
                <!------- -- -->
                <li class="nav_profile"> 
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="<?php echo ROOT_URL?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?php echo ROOT_URL?>logout.php">Logout</a></li>
                    </ul>
                </li>
             </ul>
             
             <button id="open_nab-btn"></button>
             <button id="close_nab-btn"></button>
        </div>
    </nav>
