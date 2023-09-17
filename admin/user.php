<?php
include "dashboard.php";

if (isset($_POST['save'])) {
    include "config.php";

    $uname = mysqli_real_escape_string($add, $_POST['username']);
    $pswd = mysqli_real_escape_string($add, $_POST['pswd']);
    $email = mysqli_real_escape_string($add, $_POST['email']);
    $role = mysqli_real_escape_string($add, $_POST['role']);

    $sql = "SELECT * FROM udata WHERE `username` = '{$uname}'";

    $result = mysqli_query($add, $sql) or die("Query Faild.");

    if (mysqli_num_rows($result) > 0) {
        echo "User is already exist";
    } else {
        $query = "INSERT INTO `udata`(`username`,`email`, `password`, `role`) VALUES ('$uname','$email','$pswd','$role')";
        $run = mysqli_query($add, $query);
        if ($run) {
            header("Location:{$hostname}admin/show.php");
            // echo "Success";
        } else {
            echo "Failed";
        }
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
    <h1 class="fw-lighter">Add User</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="w-25 m-auto p-4 shadow rounded">
        <div class="mb-3">
            <label for="uname" class="form-label">User name :</label>
            <input type="text" required name="username" class="form-control" id="uname">
        </div>
        <div class="mb-3">
            <label for="uname" class="form-label">Email :</label>
            <input type="email" required name="email" class="form-control" id="uname">
        </div>
        <div class="mb-3">
            <label for="psd" class="form-label">Password :</label>
            <input type="password" required name="pswd" class="form-control" id="psd">
        </div>
        <label for="select" class="form-label">Roll User:</label>
        <select required class="form-select mb-4" name="role" id="select">
            <option>USER ROLL :</option>
            <option value="User" selected>User</option>
            <option value="Admin">Admin</option>
        </select>
        <button type="submit" name="save" class="btn btn-outline-primary">Submit</button>
        <a href="/e-tem/admin/show.php" class="btn btn-outline-info">Show Data</a>
    </form>
</body>

</html>