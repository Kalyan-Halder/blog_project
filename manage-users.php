<?php 
   include './partials/header.php';
?>

<section class="dashboard">
    <div class="container dashboard_container">
        <aside>
            <ul>
                <li>
                    <a href="./admin/add-post.php"><i class="fa-solid fa-pen"></i>
                        <h5>Add Post</h5>
                    </a>  
                </li>
                <li>
                    <a href="./admin/dashboard.php"><i class="fa-solid fa-list-check"></i>
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <li>
                    <a href="./admin/add-user.php"><i class="fa-solid fa-user-plus"></i>
                        <h5>Add User</h5>
                    </a>
                </li>
                <li>
                    <a href="./admin/dashboard.php" class="active"><i class="fa-solid fa-people-arrows"></i>
                        <h5>Manage Users</h5>
                    </a>                  
                </li>
                <li>
                    <a href="./admin/add-category.php"><i class="fa-solid fa-puzzle-piece"></i>
                        <h5>Add Category</h5>
                    </a>                
                </li>
                <li>
                    <a href="manage-categories.php"><i class="fa-solid fa-bars-progress"></i>
                        <h5>Manage Categories</h5>
                    </a>        
                </li>
            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>
            <table>
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
                    <tr>
                        <td>Kalyan Halder</td>
                        <td>kalyan</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Joy Debhnath</td>
                        <td>joy</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Akash Saha</td>
                        <td>akash</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>


     
<?php 
   include './partials/footer.php';
 ?>