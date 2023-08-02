<?php 
  require 'config/database.php';

  if(isset($_GET['id'])){
  $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
 

  $query = "select * from posts where id=$id";
  $result = mysqli_query($conn,$query);

  if(mysqli_num_rows($result)==1){
    $post = mysqli_fetch_assoc($result);
    $thumbnail_name=$post['thumbnail'];
    $thumbnail_path = '../images/thumbnails/'.$thumbnail_name;

    if($thumbnail_path){
        unlink($thumbnail_path);
        //delete post from database
        $delete_post_query = "delete from posts where id=$id limit 1";
        $delete_post_result = mysqli_query($conn,$delete_post_query);
        
        if(!mysqli_errno($conn)){
            $_SESSION['delete-post-success']="Post Deleted Successfully!!!";

        }
    }

  }
     
}
header('location:'.ROOT_URL.'admin/');
die();
?>