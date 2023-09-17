<?php
session_start();
// session_destroy();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['save'])) {

        if (isset($_SESSION['cart'])) {

            $my_items = array_column($_SESSION['cart'], 'name');

            if (in_array($_POST['name'], $my_items)) {
                echo "
                <script>
                alert('Item Already Exist');
				window.location.href='http://localhost/e-tem/store.php';
				</script>
                ";
            }
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] =  array('name' => $_POST['name'], 'price' => $_POST['price'], 'amount' => 1);
            echo "<script>
            window.location.href='http://localhost/e-tem/store.php';
            </script>";
        } else {
            $_SESSION['cart'][0] = array('name' => $_POST['name'], 'price' => $_POST['price'], 'amount' => 1);
            echo "<script>
				window.location.href='http://localhost/e-tem/store.php';
				</script>";
        }
    }
    if (isset($_POST['dell'])) {
        session_destroy();
        echo "<script>
                window.location.href='http://localhost/e-tem/store.php';
                </script>";
    }
    if (isset($_POST['remove_item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['name'] == $_POST['item-name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                window.location.href='http://localhost/e-tem/store.php';
                </script>";
            }
        }
    }
    if (isset($_POST['Mod_quantity'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['name'] == $_POST['item-name']) {

                $_SESSION['cart'][$key]['amount'] = $_POST['Mod_quantity'];
                // unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                window.location.href='http://localhost/e-tem/store.php';
                </script>";
                // print_r($_SESSION['cart']);
            }
        }
    }
}
