<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname=filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'],FILTER_SANITIZE_NUMBER_INT);

    if(!$firstname || !$lastname){
        $_SESSION['edit-user'] = "INvalid form input";

    }else{
        $query = "update users set firstname='$firstname',lastname='$lastname',is_admin=$is_admin where id=$id limit 1";
        $result = mysqli_query($conn,$query);

        if(mysqli_errno($conn)){
            $_SESSION['edit-user']="Failed to update";
        }else{
            $_SESSION['edit-user-success']="User $firstname $lastname updated successfully";
        }
    }
}
header('location:'. ROOT_URL .'admin/manage-users.php');
die();
?>