<?php
include "dashboard.php";
include "conn.php";
$fid = $_GET['h'];
if (isset($_POST['submit'])) {
    if (empty($_FILES['img-select']['name'])) {
        $file_name = $_POST['old-img'];
    } else {

        $file_name = $_FILES['img-select']['name'];
        $file_temp = $_FILES['img-select']['tmp_name'];

        move_uploaded_file($file_temp, "upload/img/" . $file_name);
    }

    $query = "UPDATE `carosal` SET `image` = '$file_name' WHERE id = '$fid'";
    $queryrun = mysqli_query($add, $query);
    if ($queryrun) {

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
    <h1>Edit Image</h1>
    <?php
    $query = "SELECT * FROM `carosal` WHERE id = $fid";

    $run = mysqli_query($add, $query);

    $row = mysqli_fetch_assoc($run);
    ?>


    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">

            <label for="">ID</label>
            <input type="text" name="id" value="<?php echo $row['id']; ?>" class="form-control w-50">
        </div>

        <div class="input-group mb-3 mt-3">

            <div class="mb-3">

                <h3>Select Course Image</h5>
                    <input type="file" class="form-control " name="img-select">
                    <input type="hidden" class="form-control" name="old-img" id="" value="<?php echo $row['image']; ?>">

            </div>
            <img src="<?php echo "upload/img/" . $row['image'] ?>" class="img-fluid ms-3 rounded" width="200px" alt="">


        </div>

        <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        <a href="show.php" class="btn btn-outline-info">Show Data</a>
    </form>


</body>

</html>