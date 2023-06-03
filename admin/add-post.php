<?php 
  include 'partials/header.php'
?>


    <!--======================================================================Search========================================================-->
   

<section class="form_section">
    <div class="container form_section-container">
        <h2>Add Post</h2>
        <div class="alert_message error">
            <p>This is an error message</p>

        </div>
        <form action=""  enctype="multipart/form-data" >
            <input type="text" placeholder="Title">
            <select name="" id="">
                <option value="1">Travel</option>
                <option value="2">Art</option>
                <option value="3">Science & Technology</option>
                <option value="4">Music</option>
                <option value="5">Food</option>
                <option value="6">Widl Life</option>

            </select>
            <textarea name="" id="" cols="30" rows="10" placeholder="Body"></textarea>
            <div class="form_control inline">
                <input type="checkbox" name="" id="is_featured" checked>
                <label for="is_featured" >Featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" name="" id="thumbnail">
            </div>
            <textarea name="" id="" cols="30" rows="6" placeholder="Description"></textarea>
            <button type="submit" class="btn">Add Post</button>
            
        </form>
    </div>
</section>

     <!--======================================================================End Of Category Buttons========================================================-->
     
     <?php 
        include '../partials/footer.php';
     ?>