<?php
include 'partials/header.php'
?>

<!--======================================================================Search========================================================-->


<section class="form_section">
    <div class="container form_section-container">
        <h2>Add User</h2>
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
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form_control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="" id="avatar">
            </div>
            <button type="submit" class="btn">Add User</button>

        </form>
    </div>
</section>

<!--======================================================================End Of Category Buttons========================================================-->
<?php
include '../partials/footer.php';
?>