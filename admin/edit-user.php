<?php 
  include 'partials/header.php';
  if(isset($_GET['id'])){
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $query = "select * from users where id=$id";
    $result = mysqli_query($conn,$query);
    $user = mysqli_fetch_assoc($result);
  }else{
    header('location:'.ROOT_URL.'admin/manage-users.php');
    die();
  }
?>


    <!--======================================================================Search========================================================-->
   

<section class="form_section">
    <div class="container form_section-container">
        <h1>Edit User</h1>
        
        <form action="<?= ROOT_URL ?>admin/edit-user-logic.php" method="POST">
            <input type="hidden" name="id" value="<?= $user['id']?>">
            <input type="text" placeholder="First Name" name="firstname" value="<?= $user['firstname']?>">
            <input type="text" placeholder="Last Name" name="lastname" value="<?= $user['lastname']?>">
            <select name="userrole" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" class="btn" name="submit">Update User</button>
             
        </form>
    </div>
</section>

     <!--======================================================================End Of Category Buttons========================================================-->
     
     <?php 
         include '../partials/footer.php';
      ?>