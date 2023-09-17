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
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    ?>
        <div class="container my-5">
            <form class="m-auto w-75 p-4 shadow rounded" method="post" action="purchase.php">
                <div class="mb-3">
                    <label for="name" class="form-label">User Name :</label>
                    <input type="text" name="username" class="form-control" id="name" required aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Phone number :</label>
                    <input type="text" name="phone" class="form-control" id="number" required aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email :</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address :</label>
                    <input type="text" name="address" class="form-control" id="address" required aria-describedby="emailHelp">
                </div>
                <label for="check" class="form-label">Select Payment Mode :</label>
                <div class="d-flex py-3"  id="check">
                    <div class="form-check mx-5">
                        <input class="form-check-input" value="JASS CASH" type="radio" name="check" id="jazz" checked>
                        <label class="form-check-label" for="jazz">
                            JAZZ CASH
                        </label>
                    </div>
                    <div class="mx-5 form-check">
                        <input class="form-check-input" type="radio" value="PAYPAL" name="check" id="paypal" >
                        <label class="form-check-label" for="paypal">
                            PAYPAL
                        </label>
                    </div>
                </div>

                <button type="submit" name="purchase" class="btn btn-lg btn-outline-primary">Submit</button>
            </form>
        </div>
    <?php
    } else {
        echo "
        <div class='container my-5 text-center'>
        <p class='display-3'> Add Your Product First</p>
        <a href='products.php' class='btn btn-lg btn-outline-warning ml-2 m-3'>Add Product</a>
        </div>

            ";
    }

    ?>
    <?php
    include "carosal.php";
    ?>
    <!-- end of  partners -->
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