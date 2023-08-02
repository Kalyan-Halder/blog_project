<?php
include 'partials/header.php';
 $query = "select * from categories";
 $categories = mysqli_query($conn,$query);


 if(isset($_GET['id'])){
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $query = "select * from posts where id=$id";
    $result = mysqli_query($conn,$query);
    $post = mysqli_fetch_assoc($result);
 }else{
    header('location:'.ROOT_URL . 'admin/');
    die();
 }
?>

<!--======================================================================Search========================================================-->


<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit Post</h2>

        <form action="<?=ROOT_URL?>admin/edit-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" value="<?= $post['id']?>" name="id">
            <input type="hidden" value="<?= $post['thumbnail']?>" name="previous_thumbnail_name">
            <input type="text" value="<?= $post['title']?>" name="title" placeholder="Title">

            <select name="category" id="">
            <?php while($category=mysqli_fetch_assoc($categories)): ?>
                  <option value="<?= $category['id'] ?>"><?= $category['title']?></option>
            <?php endwhile ?>
            </select>

            <textarea name="body" id="" cols="30" rows="10" placeholder="Body"><?= $post['body'] ?></textarea>
            <div class="form_control inline">
                <input type="checkbox" name="is_featured" value="1" checked id="is_featured">
                <label for="is_featured">Featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Change Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="btn">Update Post</button>

        </form>
    </div>
</section>

<!--======================================================================End Of Category Buttons========================================================-->

<?php
include '../partials/footer.php';
?>