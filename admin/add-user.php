<?php
include 'partials/header.php'
?>

<!--======================================================================Search========================================================-->


<section class="form_section">
    <div class="container form_section-container">
        <h2>Add User</h2>
        
        <?php if(isset($_SESSION['add-user'])): ?>
          <div class="alert_message error">
            <p>
                <?= $_SESSION['add-user'];
                unset($_SESSION['add-user']);
                ?>
            </p>
          </div>
          <?php endif ?>

        <form action="<?= ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" placeholder="First Name" name="firstname">
            <input type="text" placeholder="Last Name" name="lastname">
            <input type="text" placeholder="Username" name="username">
            <input type="email" id="" placeholder="Email" name="email">
            <input type="password" id="" placeholder="Password" name="createpassword">
            <input type="password" id="" placeholder="Confirm Password" name="confirmpassword">
            <select name="userrole" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form_control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" class="btn" name="submit">Add User</button>

        </form>
    </div>
</section>

<!--======================================================================End Of Category Buttons========================================================-->
<?php
include '../partials/footer.php';
?>