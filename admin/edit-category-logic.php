<?php 
   require 'config/database.php';

   if(isset($_POST['submit'])){
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    echo $title;
    echo $description;


    if(!$title || !$description){
        $_SESSION['edit-category']="Invalid form input on edit category page";
    }else{
        $query = "update categories set title='$title',description='$description' where id=$id limit 1";
        $result = mysqli_query($conn,$query);

        if(mysqli_errno($conn)){
            $_SESSION['edit-category']="Couldn't update category";
        }else{
            $_SESSION['edit-category-success']="Categoty $title updated successfully";
        }
    }

   }

   header('location:'.ROOT_URL . 'admin/manage-categories.php');
   die();

?>