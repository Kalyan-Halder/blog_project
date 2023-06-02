<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
    src="https://kit.fontawesome.com/7376a8695f.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>


<section class="form_section">
    <div class="container form_section-container">
        <h2>sign Up</h2>
        <div class="alert_message error">
            <p>This is an error message</p>

        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="Username">
            <input type="email" name="" id="" placeholder="Email">
            <input type="password" name="" id="" placeholder="Password">
            <input type="password" name="" id="" placeholder="Confirm Password">
        
            <div class="form_control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="" id="avatar">
            </div>
            <button type="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>


</body>
</html>