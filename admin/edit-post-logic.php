<?php 
require 'config/database.php';

if(isset($_POST['submit'])){
    
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $title = filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $category_id = filter_var($_POST['category'],FILTER_SANITIZE_NUMBER_INT);
    $is_featured = filter_var($_POST['is_featured'],FILTER_SANITIZE_NUMBER_INT);

    $thumbnail = $_FILES['thumbnail'];

    $is_featured = $is_featured == 1 ? : 0;


    if(!$title){
        $_SESSION['edit-post']="Unable to update.Enter Post Title";
    }elseif(!$category_id){
        $_SESSION['edit-post']="Unable to update.Select Post category";
    }elseif(!$body){
        $_SESSION['edit-post']="Unable to update.Enter post body";
    }else{
    
        if($thumbnail['name']){
             $previous_thumbnail_path = '../images/thumbnails/' . $previous_thumbnail_name;
             if($previous_thumbnail_path){
                 unlink($previous_thumbnail_path);
             }
         
         //work on new thumbnail

         $time = time();
         $thumbnail_name = $time .  $thumbnail['name'];
         $thumbnail_tmp_name=$thumbnail['tmp_name'];
         $thumbnail_destination_path = '../images/thumbnails/' . $thumbnail_name;
 

         $allowed_files = ['png','jpg','jpeg'];
         $extension = explode('.',$thumbnail_name);
         $extension = end($extension);

          if(in_array($extension,$allowed_files)){
            if($thumbnail['size']<2000000){
                move_uploaded_file($thumbnail_tmp_name,$thumbnail_destination_path);
            }else{
                $_SESSION['edit-post']="File size too big. Should be less than 2mb";
            }
         }else{
            $_SESSION['edit-post']="Unable to update. File should be png , jpg , or jpeg";
         }
        }
     }



    if(isset($_SESSION['edit-post'])){
        header('location:'.ROOT_URL.'admin/');
        die();
    }else{

        if($is_featured == 1){
            $zero_all_is_featured_query = "update posts set is_featured=0";
            $zero_all_is_featured_result = mysqli_query($conn,$zero_all_is_featured_query);
        }

        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;

        $query = "update posts set title='$title',body='$body', thumbnail='$thumbnail_to_insert',category_id='$category_id',is_featured='$is_featured' where id=$id limit 1";
        $result = mysqli_query($conn,$query);
    }
    if(!mysqli_errno($conn)){
        $_SESSION['edit-post-success']="Successfully updated. Title: '$title' ";
    }

}
header('location:'. ROOT_URL . 'admin/');
die();
 
?>