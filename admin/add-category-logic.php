<?php 
 require 'config/database.php';
 if(isset($_POST['submit'])){
    $title=filter_var($_POST['title'],FILTER_SANITIZE_SPECIAL_CHARS);
    $description=filter_var($_POST['description'],FILTER_SANITIZE_SPECIAL_CHARS);
    if(!$title){
        $_SESSION['add-category']="Enter Title";
    }elseif(!$description){
        $_SESSION['add-category']="Enter Description";
    }
 }

 if(isset($_SESSION['add-category'])){
    $_SESSION['add-category-data']=$_POST;
    header('location:'. ROOT_URL . 'admin/add-category.php');
    die();
 }else{
    $query = "insert into categories (title,description) values ('$title','$description')" ;
    $result = mysqli_query($conn,$query);
    if(mysqli_errno($conn)){
        $_SESSION['add-category']="Couldn't add category";
        header('location:'. ROOT_URL . 'admin/add-category.php');
        die();
    }else{
        $_SESSION['add-category-success']="Category $title added successfully";
        header('location:'. ROOT_URL . 'admin/manage-categories.php');
        die();
    }
 }
?>