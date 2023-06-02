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
     
     <footer>
        <div class="footer_socials">
           <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
           <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
           <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
           <a href="https://facebook.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
           <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="container footer_container">
           <article>
               <ul>
                   <h4>Categories</h4>
                   <li><a href="">Art</a></li>
                   <li><a href="">Wild Life</a></li>
                   <li><a href="">Travel</a></li>
                   <li><a href="">Music</a></li>
                   <li><a href="">Science and Tech</a></li>
                   <li><a href="">Food</a></li>
               </ul>
           </article>
           <article>
               
               <ul>
                   <h4>Support</h4>
                   <li><a href="">Online Support</a></li>
                   <li><a href="">Call Numbers</a></li>
                   <li><a href="">Emails</a></li>
                   <li><a href="">Social Support</a></li>
                   <li><a href="">Locations</a></li>
                   
               </ul>
           </article>
           <article>
         
               <ul>
                   <h4>Blog</h4>
                   <li><a href="">Safety</a></li>
                   <li><a href="">Repair</a></li>
                   <li><a href="">Recent</a></li>
                   <li><a href="">Popular</a></li>
                   <li><a href="">Category</a></li>
                  
               </ul>
           </article>
           <article>
               
               <ul>
                   <h4>Peralinks</h4>
                   <li><a href="">Home</a></li>
                   <li><a href="">Blog</a></li>
                   <li><a href="">About</a></li>
                   <li><a href="">Services</a></li>
                   <li><a href="">Contact</a></li>
               </ul>
           </article>
        </div>
        <div class="footer_copyright">
             <small>Copyright &copy; 2023 kalyan</small>
        </div>
    </footer>

</body>
</html>