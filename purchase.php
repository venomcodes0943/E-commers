<?php
include "config.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $payment = $_POST['check'];
        $sql = "INSERT INTO `purchase_cart`(`user_name`, `phone`, `email`, `address`, `pay_Mode`) VALUES ('$name','$phone','$email','$address','$payment')";
        $run = mysqli_query($add, $sql);
        if ($run) {
            $order_id = mysqli_insert_id($add);
            $query2 = "INSERT INTO `user_oder`(`id`, `oder_name`, `oder_price`, `oder_amount`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($add, $query2);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isis", $order_id, $oder_name, $oder_price, $oder_amount);
                foreach ($_SESSION['cart'] as $key => $value) {
                    $oder_name = $value['name'];
                    $oder_price = $value['price'];
                    $oder_amount = $value['amount'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "<script>
				alert('All Done');
				window.location.href='index.php';
				</script>";
                // echo "run";
            } else {
                echo "
				<script>
				alert('sql prepare error');
				window.location.href='store.php';
				</script>";
            }
        }
    }
}
