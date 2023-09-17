<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

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

<body> <!-- featured section -->
    <section id="featured" class="featured py-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-10 mx-auto text-center" data-aos="fade-up">
                    <h1 class="text-uppercase">
                        featured products
                    </h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, deleniti?
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <?php
                $queer = "SELECT * FROM `product`";
                $run = mysqli_query($add, $queer);
                while ($row = mysqli_fetch_assoc($run)) {
                ?>
                    <div class="col-10 mx-auto col-md-6 rounded col-lg-4">
                        <div class="featured-container rounded">
                            <img src="admin/upload/<?php echo $row['img'] ?>" alt="" class="img-fluid rounded">
                            <span class="featured-search-icon" data-toggle="modal" data-target="#productModal">
                                <i class="fas fa-search"></i>
                            </span>
                            <a href="singleproduct.php?h=<?php echo $row['id'] ?>" class="featured-store-link text-capitalize">Add to cart</a>
                        </div>
                        <h6 class="text-capitalize text-center my-2">
                            <?php echo $row['title'] ?>
                        </h6>
                        <h6 class="text-center">
                            <span>$<?php echo $row['price'] ?></span>
                        </h6>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>

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

    <!-- end of featured section -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- fontwesome js -->
    <script src="js/all.min.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>
</body>

</html>