<?php 
  include 'partials/header.php'
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
                    <a href="dashboard.php" class="active"><i class="fa-solid fa-list-check"></i>
                        <h5>Manage Post</h5>
                    </a>
                </li>
                <li>
                    <a href="add-user.php"><i class="fa-solid fa-user-plus"></i>
                        <h5>Add Users</h5>
                    </a>
                </li>
                <li>
                    <a href="./manage-users.php" ><i class="fa-solid fa-people-arrows"></i>
                        <h5>Manage User</h5>
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
            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>
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
                    <tr>
                        <td>Adventure Awaits: The Ultimate Guide to Solo Travel</td>
                        <td>Travel</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Unlocking the Power of Artificial Intelligence: Applications and Impacts</td>
                        <td>Tech</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr> <tr>
                        <td>The Rise of Remote Work: Advantages, Challenges, and Best Practices</td>
                        <td>Life</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr> <tr>
                        <td>Navigating the Cryptocurrency Market: A Beginner's Guide</td>
                        <td>Economic</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    </tr> <tr>
                        <td>The Art of Mindfulness: Cultivating Inner Peace in a Busy World</td>
                        <td>Health</td>
                        <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>


     
<?php 
   include '../partials/footer.php';
?>