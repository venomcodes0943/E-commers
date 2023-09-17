<?php
include "config.php";
$fid = $_GET['h'];
$query = "DELETE FROM `udata` WHERE `id` = ' $fid'";
$run = mysqli_query($add, $query);
if ($run) {
    // echo "OKAy";
    header("Location:{$hostname}/admin/show.php");
} else {
    echo "Failed";
}