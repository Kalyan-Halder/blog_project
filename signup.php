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
    <div class="container form_section-container">
        <h2>sign Up</h2>
        <div class="alert_message error">
            <p>This is an error message</p>

        </div>
        <form action="<?php echo ROOT_URL?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" id="" placeholder="Email">
            <input type="password" name="createpassword" id="" placeholder="Password">
            <input type="password" name="confirmpassword" id="" placeholder="Confirm Password">
        
            <div class="form_control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>


</body>
</html>