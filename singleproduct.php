<!DOCTYPE html>
<html lang='en'>
<?php
session_start();
//   session_destroy();
?>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>E-commerce Project</title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <!-- fontawesome css -->
    <link rel='stylesheet' href='css/all.min.css'>
    <!-- Bootstrap css -->
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <!-- custom css -->
    <link rel='stylesheet' href='css/style.css'>
</head>

<body>
    <?php
    include 'navbar.php'
    ?>
    <div class='banner-single-product d-flex pl-3 pl-lg-5 align-items-center text-center justify-content-center'>
        <div>
            <h1 class='text-slanted text-capitalize display-4 text-yellow'>
                comfy sloth
            </h1>
            <h1 class='text-capitalize display-4 font-weight-bold'>
                single product
            </h1>
        </div>
    </div>
    </header>
    <!-- end of header section -->

    <!-- single product -->
    <section id='single' class='single-product py-5'>
        <div class='container'>
            <div class='row'>
                <!-- <form action = 'manage.php' class = 'd-flex'> -->

                <?php
                include 'config.php';

                $id = '';

                if (isset($_GET['h'])) {
                    $id = $_GET['h'];
                }

                $que = "SELECT * FROM `product`  WHERE product.id = '$id'";
                $run = mysqli_query($add, $que);

                while ($row = mysqli_fetch_assoc($run)) {
                ?>
                    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class='col-10 mx-auto col-lg-4 my-5 text-center'>
                        <div class='single-product-img-container'>
                            <img src="admin/upload/<?php echo $row['img'] ?>" alt='' class='img-fluid'>
                        </div>
                    </div>
                    <!-- info -->
                    <div data-aos="zoom-out-left" class='col-10 col-lg-8 mx-auto px-lg-5 single-product-info my-5'>
                        <h2 class='text-uppercase my-2'>
                            <?php echo $row['title'] ?>
                        </h2>
                        <!-- ratings -->
                        <div class='ratings'>
                            <span class='rating-icon'>
                                <i class='fas fa-star'></i>
                            </span>
                            <span class='rating-icon'>
                                <i class='fas fa-star'></i>
                            </span>
                            <span class='rating-icon'>
                                <i class='fas fa-star'></i>
                            </span>
                            <span class='rating-icon'>
                                <i class='fas fa-star'></i>
                            </span>
                            <span class='rating-icon'>
                                <i class='far fa-star'></i>
                            </span>
                            <span class='text-capitalize'>
                                ( 25 Customer Reviews )
                            </span>
                        </div>
                        <!-- end of ratings -->
                        <h2 class='text-uppercase my-2'>
                            $<?php echo $row['price'] ?>

                        </h2>
                        <p class='lead text-muted'>
                            <?php echo $row['detail'] ?>
                        </p>
                        <!-- colors -->
                        <h5 class='text-uppercase'>
                            <label for='color' class='form-label'>Select Color :</label>
                            <input type='color' style='width: 90px; padding: 0;' name='color' id='color' value="<?php echo $row['color'] ?>" title='Choose your color'>
                        </h5>
                        <!-- end of colors -->
                        <!-- size -->
                        <h5 class='text-uppercase product-size'>
                            Size :
                            <?php echo $row['size'] ?>
                        </h5>

                        <!-- end of size -->
                        <!-- cart buttons -->
                        <h5 class='text-uppercase product-size'>
                            Amount: <?php echo $row['amount'] ?>
                        </h5>
                        <a href="store.php" class='btn btn-black my-2 mx-2'>
                            Wishlist
                        </a>
                        <form action='manage.php' method="POST" class='d-flex'>
                            <input type='hidden' name='name' value="<?php echo $row['title']; ?>">
                            <input type='hidden' name='price' value="<?php echo $row['price']; ?>">
                            <button type='submit' name='save' class='btn btn-lg btn-outline-warning my-2 mx-2'>
                                Add To Cart
                            </button>
                        </form>
                    <?php
                }
                    ?>
                    <!-- end of cart buttons -->
                    </div>

            </div>
        </div>

    </section>
    <!-- end of single product -->

    <!-- single product info -->
    <section class='single-product-info'>
        <div class='container'>
            <div class='row'>
                <div class='col'>
                    <div class='jumbotron'>
                        <!-- products info link -->
                        <div class='d-flex justify-content-around my-3'>
                            <a href='#' class='product-info-link'>
                                <h4 class='text-capitalize'>
                                    description
                                </h4>
                            </a>
                            <a href='#' class='product-info-link'>
                                <h4 class='text-capitalize'>
                                    additional information
                                </h4>
                            </a>
                            <a href='#' class='product-info-link'>
                                <h4 class='text-capitalize'>
                                    Reviews ( 25 )
                                </h4>
                            </a>
                        </div>
                        <!-- end of products info link -->
                        <p class='lead'>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae voluptatem aperiam culpa, adipisci aspernatur fugiat, animi odio quos assumenda praesentium, doloremque consequuntur vitae repellat eos sapiente laboriosam iusto. Veritatis, enim dolore. Odit, voluptatum doloremque architecto harum at optio quas minima?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of single product info -->

    <?php
    include 'feature.php'
    ?>
    <!-- partners -->
    <?php
    include 'carosal.php';
    ?>
    <?php
    include 'footer.php'
    ?>
    <!-- end of modal -->
    <!-- jQuery -->
    <script src='js/jquery-3.4.1.min.js'></script>
    <!-- Bootstrap js -->
    <script src='js/bootstrap.bundle.min.js'></script>
    <!-- fontwesome js -->
    <script src='js/all.min.js'></script>
    <!-- Custom js -->
    <script src='js/script.js'></script>
</body>

</html>