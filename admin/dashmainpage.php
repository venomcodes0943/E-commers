<?php
include "dashboard.php";
if ($_SESSION["user_role"] == 0) {
    header("Location:{$hostname}admin/show-user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commers</title>
</head>

<body>
    <div class="display-4">PRDUCT EDIT</div>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID :</th>
                <th scope="col">Title :</th>
                <th scope="col">Size :</th>
                <th scope="col">Price :</th>
                <th scope="col">IMG :</th>
                <th scope="col">Update :</th>
                <th scope="col">Delete :</th>
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
                    <td><?php echo $row['price'] ?></td>
                    <td> <img src="upload/<?php echo $row['img']; ?>" class="img-fluid" alt="image" style="width:90px; height:90px"></td>
                    <td><a href="edit-product.php?h=<?php echo $row['id'] ?>" class="btn btn-outline-success">Update</a></td>
                    <td><a href="dell-product.php?h=<?php echo $row['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
    <br><br>
    <div class="display-4">Carosal EDIT</div>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID :</th>
                <th scope="col">IMG :</th>
                <th scope="col">Update :</th>
                <th scope="col">Delete :</th>
            </tr>
        </thead>
        <?php
        // include "config.php";
        $query = "SELECT * FROM `carosal` ORDER BY id DESC";
        $run = mysqli_query($add, $query) or die("Query Failed");
        ?>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td> <img src="upload/img/<?php echo $row['image']; ?>" class="img-fluid" alt="image" style="height:120px"></td>
                    <td><a href="editcarosal.php?h=<?php echo $row['id'] ?>" class="btn btn-outline-success">Update</a></td>
                    <td><a href="dellcarosal.php?h=<?php echo $row['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
    <br><br>
    <div class="display-4">USER EDIT</div>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User name :</th>
                <th scope="col">Email :</th>
                <th scope="col">Password :</th>
                <th scope="col">Role :</th>
                <th scope="col">Update :</th>
                <th scope="col">Delete :</th>
            </tr>
        </thead>
        <?php
        include "config.php";
        $query = "SELECT * FROM udata ORDER BY id DESC";
        $run = mysqli_query($add, $query) or die("Query Failed");
        if (mysqli_num_rows($run) > 0) {
        ?>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($run)) {

                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['role'] ?></td>
                        <td><a href="edit-user.php?h=<?php echo $row['id']; ?>" class="btn btn-outline-success">Update</a></td>
                        <td><a href="dell-user.php?h=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        <?php
        }
        ?>


</body>

</html>