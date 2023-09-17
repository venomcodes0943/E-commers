<?php
include "dashboard.php";

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
    $query = "INSERT INTO `product`(`title`, `price`, `detail`, `color`, `size`, `amount`, `img`) VALUES ('$title','$price','$detail','$color','$size','$amount','$img')" or die("Enter Valid Information");

    $run = mysqli_query($add, $query);
    if ($run) {
        header("Location:{$hostname}admin/show.php");
        // echo "Success";
    } else {
        echo "Failed";
    }
}
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body>
    <h1 class="fw-lighter display-4" style="margin-top: 20px;">Add Your Product :</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="w-50 m-auto p-4 shadow rounded mb-3">
        <div class="mb-3">
            <label for="fname" class="form-label"> Title For Your Product :</label>
            <input type="text" required name="title" class="form-control" id="fname">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Prize :</label>
            <input type="text" required name="price" class="form-control" id="lname">
        </div>
        <div class="mb-3">
            <label for="uname" class="form-label">Detail :</label>
            <input type="text" name="detail" class="form-control" id="uname">
        </div>
        <label for="select" class="form-label">Choose Your Size</label>
        <select class="form-select mb-4" name="size" id="select">
            <option value="Large">Large</option>
            <option value="Medium" selected>Medium</option>
            <option value="Small">Small</option>

        </select>
        <div class="mb-3">
            <label for="img" class="form-label">Select Img :</label>
            <input type="file" required name="image" class="form-control" id="img">
        </div>
        <?php if (!empty($response)) { ?>
            <div class="response <?php echo $response["type"]; ?>">
                <?php echo $response["message"]; ?>
            </div>
        <?php } ?>
        <div class="mb-3 d-flex">
            <div class="me-4">
                <label for="color" class="form-label">Select Color :</label>
                <input type="color" required name="color" class="form-control form-control-color ms-4" id="color" value="#391CAE" title="Choose your color">
            </div>
            <div class="ms-4">
                <label for="amount" class="form-label">How Many :</label>
                <input type="number" required name="amount" class="form-control w-75" id="amount">
            </div>
        </div>
        <button type="submit" name="save" class="btn btn-outline-primary">Submit</button>
        <a href="/e-tem/admin/show.php" class="btn btn-outline-info">Show Data</a>
    </form>
</body>

</html>