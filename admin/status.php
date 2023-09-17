<?php
include "dashboard.php";
include "config.php";
$fid = $_GET['h'];
if(isset($_POST['status'])){
    $slt = $_POST['slt'];
    $upd = "UPDATE `user_oder` SET `status`= '$slt' WHERE `id` = '$fid'";
    $run = mysqli_query($add,$upd);
    if($run){
        header("Location:http://localhost/e-tem/admin/user_products.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
</head>

<body>
    <table class="table mb-3 table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID :</th>
                <th scope="col">Oder_name :</th>
                <th scope="col">Oder_Price :</th>
                <th scope="col">Oder_Amount :</th>
                <th scope="col">Time :</th>
                <th scope="col">Oder Status :</th>
            </tr>
        </thead>
        <?php
        // include "config.php";
        $query = "SELECT * FROM `user_oder` WHERE `id` = '$fid'";
        $run = mysqli_query($add, $query) or die("Query Failed");
        ?>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {

            ?>
                <tr>
                    <td class="text-center"><?php echo $row['id'] ?></td>
                    <td class="text-center"><?php echo $row['oder_name'] ?></td>
                    <td class="text-center"><?php echo '$' . $row['oder_price'] ?></td>
                    <td class="text-center"><?php echo $row['oder_amount'] ?></td>
                    <td class="text-center"><?php echo $row['time'] ?></td>
                    <td class="text-center"><?php echo $row['status'] ?></td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <form method="post">
        <div class="container">
            <?php
            // $sql = "SELECT * FROM `user_oder` WHERE `id` = '$fid'";
            // $run = mysqli_query($add, $sql) or die("Query Failed");
            // while ($row = mysqli_fetch_assoc($run)) {
            ?>
                <select class="form-select mt-5 w-75 " name="slt" aria-label="Default select example">
                    <option value="Dispatch">Dispatch</option>
                    <option value="Order Placed" selected>Order Placed</option>
                    <option value="Delivered">Delivered</option>    
                </select>
            <?php #} ?>
            <!-- <div class="mb-3">
                <label for="reason" class="form-label mt-3 display-5">Reason:</label>
                <textarea class="form-control w-75" id="reason" name="reason" rows="5" placeholder="Write Your Reason"></textarea>
            </div> -->
            <button type="submit" name="status" class="btn btn-outline-danger mt-2">Change Status</button>
        </div>
    </form>

    <?php

    ?>

</body>

</html>