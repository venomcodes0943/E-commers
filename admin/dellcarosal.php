<?php
include "config.php";
$fid = $_GET['h'];
$query = "DELETE FROM `carosal` WHERE id = $fid";
$run = mysqli_query($add, $query);
if ($run) {
    header("location:http://localhost/e-tem/admin/show.php");
} else {
    echo "error";
}
