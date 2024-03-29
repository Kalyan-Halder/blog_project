<?php 
  include 'partials/header.php';

  //fetch user from database
  $current_admin_id = $_SESSION['user-id'];
  $query = "SELECT * from users where not id=$current_admin_id";
  $users = mysqli_query($conn,$query);
?>

<section class="dashboard">
       <?php if(isset($_SESSION['add-user-success'])) ://For adding user ?>
         <div class="alert_message success container">
            <p>
                <?= $_SESSION['add-user-success']; 
                   unset($_SESSION['add-user-success']);
                ?>
            </p>
         </div>

         <?php elseif(isset($_SESSION['edit-user-success'])) : //For updating user?>
         <div class="alert_message success container">
            <p>
                <?= $_SESSION['edit-user-success']; 
                   unset($_SESSION['edit-user-success']);
                ?>
            </p>
         </div>

         <?php elseif(isset($_SESSION['edit-user'])) : //For failing updating user?>
         <div class="alert_message error container">
            <p>
                <?= $_SESSION['edit-user']; 
                   unset($_SESSION['edit-user']);
                ?>
            </p>
         </div>
         <?php elseif(isset($_SESSION['delete-user-success'])) ://For deleting user successfully?>
         <div class="alert_message success container">
            <p>
                <?= $_SESSION['delete-user-success']; 
                   unset($_SESSION['delete-user-success']);
                ?>
            </p>
         </div>
         <?php elseif(isset($_SESSION['delete-user'])) ://For failing deleting user user ?>
         <div class="alert_message error container">
            <p>
                <?= $_SESSION['delete-user']; 
                   unset($_SESSION['delete-user']);
                ?>
            </p>
         </div>

         <?php endif ?>
         

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
                    <a href="" class="active"><i class="fa-solid fa-people-arrows"></i>
                        <h5>Users</h5>
                    </a>                  
                </li>
                <li> 
                    <a href="add-category.php"><i class="fa-solid fa-puzzle-piece"></i>
                        <h5>Add Category</h5>
                    </a>                
                </li>
                <li>
                    <a href="manage-categories.php"><i class="fa-solid fa-bars-progress"></i>
                        <h5>Manage Categories</h5>
                    </a>        
                </li>
                <?php } ?>
            </ul>
        </aside>
        <main>

        <?php if(mysqli_num_rows($users)>0) : ?>
            <table>
            <h1>Manage Users</h1>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($user=mysqli_fetch_assoc($users) ) : ?>
                    <tr>
                        <td><?= "{$user['firstname']} {$user['lastname']}"?></td>
                        <td><?= $user['username'] ?></td>
                        <td><a href="<?= ROOT_URL ?>admin/edit-user.php?id=<?=$user['id']?>" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_URL ?>admin/delete-user.php?id=<?=$user['id']?>" class="btn sm danger">Delete</a></td>
                        <td><?= $user['is_admin']?'Yes':'No' ?></td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            <button class="btn" onclick="window.print()">Print Page</button>

            <?php else : ?>
                <div class="alert_message error">No User Found</div>
            <?php endif ?>

        </main>
    </div>
</section>


     
<?php 
   include '../partials/footer.php';
?> 