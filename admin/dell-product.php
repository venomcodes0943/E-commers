<?php
include "config.php";
$fid = $_GET['h'];
$query = "DELETE FROM `product` WHERE `id` = ' $fid'";
$run = mysqli_query($add, $query);
if ($run) {
    header("Location:{$hostname}/admin/show.php");
} else {
    echo "Failed";
}
