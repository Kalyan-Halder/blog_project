<?php 
   require '../partials/header.php';
    
   if(!isset($_SESSION['user-id'])){
     header('location:' . ROOT_URL . 'signin.php');
     die();
   }
?> 
<style>
  <?php include '../css/style.css' ?>
</style>