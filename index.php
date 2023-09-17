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
  <!-- JAVASCRIPT AOS ANIMATION  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <!-- header section -->
  <?php
  include "navbar.php"
  ?>
  <div class="banner d-flex align-items-center pl-3 pl-lg-5">
    <div>
      <h1 class="text-slanted text-capitalize mb-0">
        Minimalist
      </h1>
      <h1 class="text-lowercase font-weight-bold">
        interior style
      </h1>
      <a href="#" class="btn btn-yellow"> view collection </a>
    </div>
  </div>
  </header>
  <!-- end of header section -->

  <!-- services section -->
  <section id="services" class="services py-5 text-center">
    <div class="container">
      <div class="row">
        <!-- single service -->
        <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
          <span class="service-icon">
            <i class="fas fa-parachute-box"></i>
          </span>
          <h5 class="text-uppercase font-weight-bold">
            free shipping
          </h5>
          <p class="text-muted text-capitalize">
            free shipping on all order over 100.00
          </p>
        </div>
        <!-- end of single service -->
        <!-- single service -->
        <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
          <span class="service-icon">
            <i class="fas fa-phone-volume"></i>
          </span>
          <h5 class="text-uppercase font-weight-bold">
            ONLINE SUPPORT 24/7
          </h5>
          <p class="text-muted text-capitalize">
            We Will Assist You With Your Inquiries
          </p>
        </div>
        <!-- end of single service -->
        <!-- single service -->
        <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
          <span class="service-icon">
            <i class="fas fa-dollar-sign"></i>
          </span>
          <h5 class="text-uppercase font-weight-bold">
            MONEY BACK GURANTEE
          </h5>
          <p class="text-muted text-capitalize">
            Free 100% Refund For 30 Da
          </p>
        </div>
        <!-- end of single service -->
      </div>
    </div>
  </section>
  <!-- end of services section -->

  <!-- home categories -->
  <section id="home-categories" class="home-categories py-5">
    <div class="container">
      <div class="row">
        <!-- categories title -->
        <div class="col-10 mx-auto col-md-6 col-lg-3 align-self-center"  data-aos="fade-up">
          <h5 class="text-uppercase">
            product categories
          </h5>
          <p class="text-muted text-capitalize">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore neque minus in error sunt laudantium totam nemo accusamus iure placeat.
          </p>
          <a href="" class="categorie-link text-weight-bold text-capitalize">
            view all categories
          </a>
          <div class="categorie-underline">
          </div>
        </div>
        <!-- end of categories title -->
        <!-- main categories -->
        <div class="col-10 mx-auto col-md-6 col-lg-9 my-3" data-aos-delay="600" data-aos="zoom-in">
          <div class="row">
            <!-- single category -->
            <div class="col-md-6 col-lg-3 my-3">
              <div class="category-container">
                <img src="img/cagetogoryImg/bathroom-category.jpeg" class="img-fluid category-img" alt="">
                <a href="products.php" class="category-link">
                  <h6 class="text-uppercase mb-0">
                    bathroom
                  </h6>
                  <p class="text-yellow mb-0">
                    50 items
                  </p>
                </a>
              </div>
            </div>
            <!-- end of single category -->
            <!-- single category -->
            <div class="col-md-6 col-lg-3 my-3">
              <div class="category-container">
                <img src="img/cagetogoryImg/kitchen-category.jpeg" class="img-fluid category-img" alt="">
                <a href="products.php" class="category-link">
                  <h6 class="text-uppercase mb-0">
                    kitchen
                  </h6>
                  <p class="text-yellow mb-0">
                    20 items
                  </p>
                </a>
              </div>
            </div>
            <!-- end of single category -->
            <!-- single category -->
            <div class="col-md-6 col-lg-3 my-3">
              <div class="category-container">
                <img src="img/cagetogoryImg/livingroom-category.jpeg" class="img-fluid category-img" alt="">
                <a href="products.php" class="category-link">
                  <h6 class="text-uppercase mb-0">
                    livingroom
                  </h6>
                  <p class="text-yellow mb-0">
                    25 items
                  </p>
                </a>
              </div>
            </div>
            <!-- end of single category -->
            <!-- single category -->
            <div class="col-md-6 col-lg-3 my-3">
              <div class="category-container">
                <img src="img/cagetogoryImg/patio-category.jpeg" class="img-fluid category-img" alt="">
                <a href="products.php" class="category-link">
                  <h6 class="text-uppercase mb-0">
                    patio
                  </h6>
                  <p class="text-yellow mb-0">
                    10 items
                  </p>
                </a>
              </div>
            </div>
            <!-- end of single category -->
          </div>
        </div>
        <!-- end of main categories -->
      </div>
    </div>
  </section>
  <!-- end of home categories -->

  <!-- home filler -->
  <section id="home-filler">
    <div class="container-fluid">
      <div class="row home-filler align-items-center">
        <div class="col-10 mx-auto text-center text-white"data-aos-delay="100" data-aos="zoom-out-right">
          <h4 class="text-uppercase font-weight-bold">
            smart furniture collection
          </h4>
          <p class="text-capitalize">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, accusantium
          </p>
          <a href="#" class="text-capitalize collection-link text-yellow">
            view collection
          </a>
          <div class="collection-underline"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of home filler -->

  <?php
  include "feature.php"
  ?>
  <!-- partners -->
  <?php
  include "carosal.php";
  ?>
  <!-- end of  partners -->
  <?php
  include "footer.php"
  ?>
  <!-- end of modal -->

  <!-- JAVASCRIPT AOS ANIMATION  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      delay: 3,
      duration: 1000,
      once: true,
    });
  </script>
  <!-- JAVASCRIPT AOS ANIMATION  -->

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