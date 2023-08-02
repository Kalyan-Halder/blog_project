<?php 
   require 'config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
    src="https://kit.fontawesome.com/7376a8695f.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>


<section class="form_section">
    <div class="logo">
        <a href="index.php" class="nav_logo"><i class="fa-solid fa-k icon"></i>alyan's<i class="fa-solid fa-i icon"></i>nsights <i class="fa-solid fa-brain icon"></i></a>
    </div>
    <div class="container form_section-container">

        <h2 class="header">Sign In</h2>
        <?php if(isset($_SESSION['signup_seccess'])) : ?>
         <div class="alert_message success">
            <p>
                <?= $_SESSION['signup-success']; 
                   unset($_SESSION['signup-success']);
                ?>
            </p>
         </div>
        <?php elseif(isset($_SESSION['signin'])) : ?>
        <div class="alert_message success">
            <p>
                <?= $_SESSION['signin']; 
                   unset($_SESSION['signin']);
                ?>
            </p>
         </div>
        <?php endif ?>
        <form action="<?php echo ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username" placeholder="Username of Email">
            <input type="password" name="password" id="" placeholder="Password">
            <button type="submit" name="submit" class="btn">Sign In</button>
            <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>


</body>
</html>