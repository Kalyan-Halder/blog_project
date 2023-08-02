<?php 
  include 'partials/header.php';
  if(isset($_GET['id'])){

    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

    $query = "select * from categories where id=$id";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $category = mysqli_fetch_assoc($result);
    }
  }else{
    header('location:'.ROOT_URL.'admin/manage-categories');
    die();
  }
?>

    <section class="form_section">
        <div class="container form_section-container">
            <h2>Edit Category</h2>
            <?php if(isset($_SESSION['edit-category'])) : ?>
                <div class="alert_message success">
                   <p>
                      <?= $_SESSION['edit-category'];
                      unset($_SESSION['edit-category']) ?>
                   </p>
                </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>admin/edit-category-logic.php" method="POST">
                <input type="hidden" name="id" value="<?= $category['id'] ?>">
                <input type="text" name="title" value="<?php echo $category['title'] ?>" placeholder="Title">
                <textarea rows="4" name="description"  placeholder="Description"><?php echo $category['description'] ?></textarea>
                <button type="submit" class="btn" name="submit">Update Category</button> 
            </form>
        </div>
    </section>

    <?php
    include '../partials/footer.php';
    ?>