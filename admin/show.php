<?php
include "dashboard.php";
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
</head>

<body>
    <div class="headings">
        <div class="display-4 mt-5 mb-4">User Data :</div>
        <?php
        if ($_SESSION["user_role"] == 'Admin') {
        ?>
            <a href="product.php" class="btn btn-outline-warning px-5 mt-0 mb-3">Add USer</a>
        <?php } ?>
    </div>
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Full name :</th>
                <th scope="col">User name :</th>
                <th scope="col">Email :</th>
                <th scope="col">Roll User :</th>
            </tr>
        </thead>
        <?php
        // include "config.php";
        $query = "SELECT * FROM udata ORDER BY id DESC";
        $run = mysqli_query($add, $query) or die("Query Failed");
        if (mysqli_num_rows($run) > 0) {
        ?>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($run)) {

                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['role'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        <?php
        }
        ?>
    </table>

    <div class="headings">
        <div class="display-4 mt-5 mb-4">Product Data :</div>
        <?php
        if ($_SESSION["user_role"] == 'Admin') {
        ?>
            <a href="product.php" class="btn btn-outline-warning px-5 mt-0 mb-3">Add Product</a>
        <?php } ?>
    </div>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID :</th>
                <th scope="col">Title :</th>
                <th scope="col">Size :</th>
                <th scope="col">Detail :</th>
                <th scope="col">Price</th>
                <th scope="col">IMG :</th>

            </tr>
        </thead>
        <?php
        // include "config.php";
        $query = "SELECT * FROM product ORDER BY id DESC";
        $run = mysqli_query($add, $query) or die("Query Failed");
        ?>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {

            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['size'] ?></td>
                    <td class="w-50"><?php echo $row['detail'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td> <img src="upload/<?php echo $row['img']; ?>" class="img-fluid" alt="image" style="width:150px; height:120px"></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="headings">
        <div class="display-4 mt-5 mb-4">Carosal Images :</div>
        <?php
        if ($_SESSION["user_role"] == 'Admin') {
        ?>
            <a href="item.php" class="btn btn-outline-warning px-5 mt-0 mb-3">Add Carosal Imgae</a>
        <?php } ?>
    </div>
    <table class="table w-25 table-hover table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">ID :</th>
                <th scope="col">IMG :</th>

            </tr>
        </thead>
        <?php
        // include "config.php";
        $query = "SELECT * FROM carosal ORDER BY id DESC";
        $run = mysqli_query($add, $query) or die("Query Failed");
        ?>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {

            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td> <img src="upload/img/<?php echo $row['image']; ?>" class="img-fluid" alt="image" style="height:100px"></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>