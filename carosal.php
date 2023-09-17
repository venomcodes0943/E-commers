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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        .swiper {
            width: 100%;
            height: 50%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            include "config.php";
            $sql = "SELECT * FROM `carosal`";
            $run = mysqli_query($add, $sql);
            while ($row = mysqli_fetch_assoc($run)) {
            ?>
                <div class="swiper-slide"><img src="admin/upload/img/<?php echo $row['image'] ?>" alt=""></div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- end of navbar -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- fontwesome js -->
    <script src="js/all.min.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>
</body>

</html>