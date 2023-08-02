<?php 
  include 'partials/header.php';
  $current_user_id = $_SESSION['user-id'];
  $query = "select id,title,category_id from posts where author_id=$current_user_id order by id desc";
  $posts = mysqli_query($conn,$query);
?>

<section class="dashboard">
    <div class="container dashboard_container">
        <aside>
            <ul>
                <li>
                    <a href="./add-post.php"><i class="fa-solid fa-pen"></i>
                        <h5>Add Post</h5>
                    </a>  
                </li>
                <li>
                    <a href="index.php" class="active"><i class="fa-solid fa-list-check"></i>
                        <h5>Manage Post</h5>
                    </a>
                </li>

                <?php if(isset($_SESSION['user_is_admin'])){?>
                <li>
                    <a href="add-user.php"><i class="fa-solid fa-user-plus"></i>
                        <h5>Add Users</h5>
                    </a>
                </li>
                <li>
                    <a href="./manage-users.php" ><i class="fa-solid fa-people-arrows"></i>
                        <h5>User</h5>
                    </a>                  
                </li>
                <li>
                    <a href="./add-category.php"><i class="fa-solid fa-puzzle-piece"></i>
                        <h5>Add Category</h5>
                    </a>                
                </li>
                <li>
                    <a href="./manage-categories.php" ><i class="fa-solid fa-bars-progress"></i>
                        <h5>Manage Categories</h5>
                    </a>        
                </li>
                <?php } ?>
            </ul>
        </aside>
        <main>
       
            <h1>Manage Posts</h1> 

            <?php if(isset($_SESSION['add-post-success'])): ?>
            <div class="alert_message success">
              <p>
                  <?= $_SESSION['add-post-success'];
                  unset($_SESSION['add-post-success']);
                  ?>
              </p>
            </div>
            <?php elseif(isset($_SESSION['edit-post-success'])): ?>
            <div class="alert_message success">
              <p>
                  <?= $_SESSION['edit-post-success'];
                  unset($_SESSION['edit-post-success']);
                  ?>
              </p>
            </div>
            <?php elseif(isset($_SESSION['edit-post'])): ?>
            <div class="alert_message error">
              <p>
                  <?= $_SESSION['edit-post'];
                  unset($_SESSION['edit-post']);
                  ?>
              </p>
            </div>
            <?php elseif(isset($_SESSION['delete-post-success'])): ?>
            <div class="alert_message success">
              <p>
                  <?= $_SESSION['delete-post-success'];
                  unset($_SESSION['delete-post-success']);
                  ?>
              </p>
            </div>
            <?php endif ?>
            <?php if(mysqli_num_rows($posts)>0) : ?>
            <table>
                
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th> 
                    </tr>
                </thead>
                <tbody>

                    <?php while($post = mysqli_fetch_assoc($posts)) : ?>
                        <?php 
                           $category_id = $post['category_id'];
                           $category_query = "select title from categories where id=$category_id";
                           $category_result = mysqli_query($conn,$category_query);
                           $category = mysqli_fetch_assoc($category_result);    
                        ?>
                    <tr>
                        <td><?php echo $post['title'] ?></td>
                        <td><?php echo $category['title'] ?></td>
                        <td><a href="<?=ROOT_URL?>admin/edit-post.php?id=<?=$post['id']?>" class="btn sm">Edit</a></td>
                        <td><a href="<?=ROOT_URL?>admin/delete-post.php?id=<?=$post['id']?>" class="btn sm danger">Delete</a></td>
                    </tr>
                    <?php endwhile ?>
                        
                </tbody>
            </table>
            <button class="btn" onclick="window.print()">Print Page</button>
            <?php else : ?>
              <div class="alert_message error">No Post Found !!!</div>
            <?php endif ?>
        </main>
    </div>
</section>


     
<?php 
   include '../partials/footer.php';
?>