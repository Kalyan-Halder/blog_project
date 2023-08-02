<?php 
  include 'partials/header.php';
  //fetching categories
  $query = "select * from categories";
  $categories = mysqli_query($conn,$query);
?>


    <!--======================================================================Search========================================================-->
   

<section class="form_section">
    <div class="container form_section-container">
        <h2>Add Post</h2>
          <?php if(isset($_SESSION['add-post'])): ?>
          <div class="alert_message error">
            <p>
                <?= $_SESSION['add-post'];
                unset($_SESSION['add-post']);
                ?>
            </p>
          </div>
          <?php endif ?>

        <form action="<?= ROOT_URL ?>admin/add-post-logic.php"  enctype="multipart/form-data" method="POST">
            <input type="text" name="title" placeholder="Title">
            <select name="category" id="">
                <?php while($category=mysqli_fetch_assoc($categories)): ?>
                  <option value="<?= $category['id'] ?>"><?= $category['title']?></option>
                <?php endwhile ?>
            </select>
            <textarea name="body" id="" cols="30" rows="10" placeholder="Body"></textarea>

            <?php if(isset($_SESSION['user_is_admin'])) : ?>

            <div class="form_control inline">
                <input type="checkbox" name="is_featured" value="1" id="is_featured" checked>
                <label for="is_featured" >Featured</label>
            </div>

            <?php endif ?>

            <div class="form_control">
                 
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <textarea name="description" id="" cols="30" rows="6" placeholder="Description"></textarea>
            <button type="submit" name="submit" class="btn">Add Post</button> 
        </form>
    </div>
</section>

     <!--======================================================================End Of Category Buttons========================================================-->
     
     <?php 
        include '../partials/footer.php';
     ?>