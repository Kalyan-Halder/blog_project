<?php 
    require 'config/database.php';

    if(isset($_GET['id'])){

    $category_id =filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $select = "select * from categories where id=$category_id limit 1";
   
    $result=mysqli_query($conn,$select);
    $title = mysqli_fetch_assoc($result);



    $query = "delete from categories where id=$category_id";
    mysqli_query($conn,$query);

    if(mysqli_errno($conn)){
        $_SESSION['delete-category'] = "Deletion of '{$title['title']}' was not successful.";
    }else{
        $_SESSION['delete-category-success'] = "Deleted   '{$title['title']}'   successfully.";
    }
    }
    header('location:'.ROOT_URL . 'admin/manage-categories.php');
    die();
?>