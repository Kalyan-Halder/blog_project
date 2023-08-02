<?php 
  include 'partials/header.php';
  //fetch categories
  $query = "select * from categories order by title";
  $categories = mysqli_query($conn,$query);
  
?>
<section class="dashboard">
    <div class="container dashboard_container">
        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="fa-solid fa-pen"></i>
                        <h5>Add Post</h5>
                    </a>  
                </li>
                <li>
                    <a href="index.php"><i class="fa-solid fa-list-check"></i>
                        <h5>Manage Post</h5>
                    </a>
                </li>


                <?php if(isset($_SESSION['user_is_admin'])){?>


                <li>
                    <a href="add-user.php"><i class="fa-solid fa-user-plus"></i>
                        <h5>Add User</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php"><i class="fa-solid fa-people-arrows"></i>
                        <h5>Users</h5>
                    </a>                  
                </li>
                <li>
                    <a href="add-category.php"><i class="fa-solid fa-puzzle-piece"></i>
                        <h5>Add Category</h5>
                    </a>                
                </li>
                <li>
                    <a href="manage-categories.php" class="active"><i class="fa-solid fa-bars-progress"></i>
                        <h5>Manage Categories</h5>
                    </a>        
                </li>
                        
                <?php } ?>

            </ul>
        </aside>
        <main>
            <h1>Manage Categories</h1>
            <?php if(isset($_SESSION['add-category-success'])) : ?>
                <div class="alert_message success">
                   <p>
                      <?= $_SESSION['add-category-success'];
                      unset($_SESSION['add-category-success']) ?>
                   </p>
                </div>
                <?php elseif(isset($_SESSION['delete-category-success'])) : ?>
                <div class="alert_message success">
                   <p>
                      <?= $_SESSION['delete-category-success'];
                      unset($_SESSION['delete-category-success']) ?>
                   </p>
                </div>
                <?php elseif(isset($_SESSION['delete-category'])) : ?>
                <div class="alert_message error">
                   <p>
                      <?= $_SESSION['delete-category'];
                      unset($_SESSION['delete-category']) ?>
                   </p>
                </div>
                <?php elseif(isset($_SESSION['edit-category-success'])) : ?>
                <div class="alert_message success">
                   <p>
                      <?= $_SESSION['edit-category-success'];
                      unset($_SESSION['edit-category-success']) ?>
                   </p>
                </div>
             <?php endif ?>
            <?php if(mysqli_num_rows($categories)>0) : ?>
                <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($category=mysqli_fetch_assoc($categories)) : ?>
                       <tr>
                           <td><?php echo $category['title'] ?></td>
                           <td><a href="<?= ROOT_URL ?>admin/edit-category.php?id=<?=$category['id']?>" class="btn sm">Edit</a></td>
                           <td><a href="<?= ROOT_URL ?>admin/delete-category.php?id=<?=$category['id']?>" class="btn sm danger">Delete</a></td>
                       </tr>
                    <?php endwhile ?>
                </tbody>
               </table>
               <button class="btn" onclick="window.print()">Print Page</button>

               <?php else : ?>
                   <div class="alert_message error">No Title Found</div>
               <?php endif ?>

        </main>
    </div>
</section>


     
<?php 
   include '../partials/footer.php';
?>