<?php
include "dashboard.php";
$fid = $_GET['h'];
if (isset($_POST['save'])) {

    include "config.php";
    $title = mysqli_real_escape_string($add, $_POST['title']);
    $price = mysqli_real_escape_string($add, $_POST['price']);
    $detail = mysqli_real_escape_string($add, $_POST['detail']);
    $color = mysqli_real_escape_string($add, $_POST['color']);
    $size  = mysqli_real_escape_string($add, $_POST['size']);
    $amount = mysqli_real_escape_string($add, $_POST['amount']);
    $folder = "upload/";
    $img = $_FILES['image']['name'];
    $target = $folder . $img;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
    $query = "UPDATE `product` SET `title`='$title',`price`='$price',`detail`='$detail',`color`='$color',`size`='$size',`amount`='$amount',`img`='$img'WHERE `id` = '$fid'";

    $run = mysqli_query($add, $query);
    if ($run) {
        header("Location:{$hostname}admin/show.php");
        // echo "Success";
    } else {
        echo "Failed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body>
    <h1 class="fw-lighter display-4" style="margin-top: 20px;">Change Your Product :</h1>
    <?php
    include "config.php";
    $fid = $_GET['h'];
    $query = "SELECT * FROM `product` WHERE `id` = '$fid'";
    $run = mysqli_query($add, $query) or die("Query Failed");
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
    ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="w-50 m-auto p-4 shadow rounded mb-3">
            <div class="mb-3">
                    <label for="fname" class="form-label"> ID:</label>
                    <input type="text" name="title" value="<?php echo $row['id']; ?>" class="form-control" id="fname">
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label"> Title For Your Product :</label>
                    <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control" id="fname">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Prize :</label>
                    <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control" id="lname">
                </div>
                <div class="mb-3">
                    <label for="uname" class="form-label">Detail :</label>
                    <input type="text" name="detail" value="<?php echo $row['detail']; ?>" class="form-control" id="uname">
                </div>
                <label for="select" class="form-label">Choose Your Size</label>
                <select value="<?php echo $row['role']; ?>" class="form-select mb-4" name="size" id="select">
                    <?php
                    if ($row['size'] == 'Large') {
                        echo  "<option value='Large' selected>Large</option>
                        <option value='Large'>Small</option>
                        <option value='Medium'>Medium</option>
                        ";
                    } elseif ($row['size'] == 'Medium') {
                        echo   "<option value='Large'>Large</option>
                        <option value='Medium'>Medium</option>
                        <option value='Medium' selected>Medium</option>";
                    } else {
                        echo   "
                        <option value='Large'>Large</option>
                        <option value='Medium'>Medium</option>
                        <option value='Small' selected>Small</option>
                        ";
                    }
                    ?>
                </select>
                <div class="mb-3">
                    <label for="img" class="form-label">Select Img :</label>
                    <input type="file" name="image" class="form-control" id="img">
                </div>
                <div class="mb-3 d-flex">
                    <div class="me-4">
                        <label for="color" class="form-label">Select Color :</label>
                        <input type="color" name="color" class="form-control form-control-color ms-4" id="color" value="<?php echo $row['color']; ?>" title="Choose your color">
                    </div>
                    <div class="ms-4">
                        <label for="amount" class="form-label">How Many :</label>
                        <input type="number" name="amount" value="<?php echo $row['amount']; ?>" class="form-control w-75" id="amount">
                    </div>
                </div>
                <button type="submit" name="save" class="btn btn-outline-primary">Submit</button>
                <a href="/e-tem/admin/show-product.php" class="btn btn-outline-info">Show Data</a>
            </form>
    <?php
        }
    }
    ?>
</body>

</html>