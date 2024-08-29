<?php
session_start();
if(!isset($_SESSION['id_user'])){
  header('location:login.php');
}

include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Star Admin</title>
   <?php include('component/style.php') ?>
</head>

<body>
   <div class=" container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include 'component/navbar.php'; ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include 'component/sidebar.php';?>

            <!-- partial -->
            <div class="main-panel">
              <div class="content-wrapper">
               <?php include 'content.php'?>
            </div>
            <!-- partial:partials/_footer.html -->
            <?php include 'component/footer.php'; ?>

            <!-- partial -->
         </div>
      </div>

   </div>

   <?php include 'component/script.php'; ?>
</body>
</html>


