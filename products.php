<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Project</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- fontawesome css -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- header section -->
  <?php
  include "navbar.php"
  ?>
  <div class="banner-product d-flex pl-3 pl-lg-5 align-items-center text-center justify-content-center">
    <div>
      <h1 class="text-slanted text-capitalize display-4 text-yellow">
        comfy sloth
      </h1>
      <h1 class="text-capitalize display-4 font-weight-bold">
        our products
      </h1>
    </div>
  </div>
  </header>
  <?php
  include "feature.php"
  ?>
  <!-- partners -->
  <?php include "carosal.php";?>  <!-- end of  partners -->
  <?php
  include "footer.php"
  ?>
  <!-- end of modal -->
  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- fontwesome js -->
  <script src="js/all.min.js"></script>
  <!-- Custom js -->
  <script src="js/script.js"></script>
</body>

</html>