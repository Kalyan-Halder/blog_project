<?php

require 'config/database.php';
if(isset($_GET['id'])){
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

    $query = "select * from users where id=$id";
    $result = mysqli_query($conn,$query);
    $user = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)==1){
        $avatar_name = $user['avatar'];
        $avatar_path = '../images/avatars/' . $avatar_name;

        if($avatar_path){
            unlink($avatar_path);
        }
    }

    //for later
    // fetch all post from the use and delete the thumbnails from the host server


    $delete_user_query = "delete from users where id=$id";
    $delete_user_result = mysqli_query($conn,$delete_user_query);
    if(mysqli_errno($conn)){
        $_SESSION['delete-user']="Couldn't delete '{$user['firstname']} {$user['lastname']}'";
    }else{
        $_SESSION['delete-user-success'] = "User '{$user['firstname']} {$user['lastname']}' deleted successfully";
    }
}

header('location:'.ROOT_URL . 'admin/manage-users.php');
die();

?>