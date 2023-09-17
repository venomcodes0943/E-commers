<?php
include "config.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:{$hostname}admin/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commers</title>
    <?php
    require "link.php";
    ?>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="">
            <h6 class="fw-bold fs-2  p-3 my-4 text-uppercase">Hello <?php echo $_SESSION['username']  ?></h6>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div><a href="/e-tem/admin/welcome.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i><span class="nav_logo-name">The -- SS --</span></a>
                <div class="nav_list">
                    <a href="/e-tem/admin/show.php" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Users Data</span></a>
                    <?php
                    if ($_SESSION["user_role"] == 'Admin') {
                    ?>
                        <a href="/e-tem/admin/user.php" class="nav_link">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Add Users</span>
                        </a>
                        <a href="/e-tem/admin/dashmainpage.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard</span></a>
                        <a href="item.php" class="nav_link">
                            <i class='bx bx-book nav_icon'></i>
                            <span class="nav_name">Items</span></a>
                        <a href="product.php" class="nav_link">
                        <iconify-icon icon="solar:sofa-3-linear" width="25" flip="horizontal"></iconify-icon>
                            <span class="nav_name">Add Products</span></a>
                        <a href="user_products.php" class="nav_link">
                        <iconify-icon icon="clarity:users-line" width="25" flip="horizontal"></iconify-icon>
                            <span class="nav_name">User Products</span></a>
                    <?php
                    }
                    ?>
                    <!-- <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span></a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span></a> -->
                </div>
            </div>
            <a href="/e-tem/admin/logout-user.php" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span></a>
        </nav>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="project.js"></script>
</body>

</html>