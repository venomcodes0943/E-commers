<?php
include "dashboard.php";
include "conn.php";
if (isset($_POST['submit'])) {
    $folder = "upload/img/";
    $img = $_FILES['image']['name'];
    $target = $folder . $img;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $query = "INSERT INTO `carosal`(`image`) VALUES ('$img')";

    $query = mysqli_query($add, $query);

    if ($query) {

        header("Location:http://localhost/e-tem/admin/show.php");
    } else {
        echo "try again";
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
    <h1 class="fw-lighter display-4" style="margin-top: 20px;">Add Carosal Image :</h1>

    <form method="post" class="w-75 m-auto shadow p-4" enctype="multipart/form-data">
        <label for="image">Add Image :</label>
        <input type="file" name="image" class="form-control mt-3" id="image">
        <br>
        <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        <a href="show.php" class="btn btn-primary">Show Data</a>

    </form>
</body>

</html>