<?php
include "dashboard.php";
?>
<div class="container">
    <div class="display-3 text-center my-4">
        Purchasing Users :
    </div>
</div>
<table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID :</th>
                <th scope="col">UserName :</th>
                <th scope="col">Phone :</th>
                <th scope="col">Email :</th>
                <th scope="col">Price</th>
                <th scope="col">Pay Mode :</th>

            </tr>
        </thead>
        <?php
        // include "config.php";
        $query = "SELECT * FROM `purchase_cart` ORDER BY id DESC";
        $run = mysqli_query($add, $query) or die("Query Failed");
        ?>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {

            ?>
                <tr>
                    <td class="text-center"><?php echo $row['id'] ?></td>
                    <td class="text-center"><?php echo $row['user_name'] ?></td>
                    <td class="text-center"><?php echo $row['phone'] ?></td>
                    <td class="text-center"><?php echo $row['email'] ?></td>
                    <td class="text-center"><?php echo $row['address'] ?></td>
                    <td class="text-center"><?php echo $row['pay_Mode'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="container">
    <div class="display-3 text-center my-4">
        Purchasing Products : 
    </div>
</div>
<table class="table mb-3 table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID :</th>
                <th scope="col">Order_name :</th>
                <th scope="col">Order_Price :</th>
                <th scope="col">Order_Amount :</th>
                <th scope="col">Order Status :</th>
                <th scope="col">Time :</th>
                <th scope="col">Edit Status :</th>
            </tr>
        </thead>
        <?php
        // include "config.php";
        $query = "SELECT * FROM `user_oder` ORDER BY id DESC";
        $run = mysqli_query($add, $query) or die("Query Failed");
        ?>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {

            ?>
                <tr>
                    <td class="text-center"><?php echo $row['id'] ?></td>
                    <td class="text-center"><?php echo $row['oder_name'] ?></td>
                    <td class="text-center"><?php echo '$'.$row['oder_price'] ?></td>
                    <td class="text-center"><?php echo $row['oder_amount'] ?></td>
                    <td class="text-center"><?php echo $row['status'] ?></td>
                    <td class="text-center"><?php echo $row['time'] ?></td>
                    <td class="text-center">
                        <a href="status.php?h=<?php echo $row['id']?>" class="btn btn-outline-success">Change Status</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>