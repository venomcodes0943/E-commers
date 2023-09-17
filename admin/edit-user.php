<?php
include "dashboard.php";
if ($_SESSION["user_role"] == 0) {
    
    header("Location:{$hostname}admin/show-user.php"); 

}
$fid = $_GET['h'];
if (isset($_POST['submit'])) {

    include "config.php";
    $uname = mysqli_real_escape_string($add, $_POST['uname']);
    $pswd = mysqli_real_escape_string($add, $_POST['pswd']);
    $email = mysqli_real_escape_string($add, $_POST['email']);
    $role = mysqli_real_escape_string($add, $_POST['role']);

   
    $query = "UPDATE `udata` SET `username`='$uname',`email`='$email',`password`='$pswd',`role`='$role' WHERE `id` = '$fid'";

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
    <title>PROJECT</title>
</head>

<body>
    <?php
    include "config.php";

    $query = "SELECT * FROM udata WHERE `id` = '$fid'";
    $run = mysqli_query($add, $query) or die("Query Failed");
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
    ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="w-50 m-auto p-4 shadow rounded">
                <div class="mb-3">
                    <label for="uname" class="form-label">User name :</label>
                    <input type="text" name="uname" value="<?php echo $row['username']; ?>" class="form-control" id="uname">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="psd" class="form-label">Password :</label>
                    <input type="text" name="pswd" value="<?php echo $row['password']; ?>" class="form-control" id="psd">
                </div>
                <label for="select" class="form-label">Roll User:</label>
                <select class="form-select mb-4" value="<?php echo $row['role']; ?>" name="role" id="select">
                    <option>Select Role :</option>
                    <?php
                    if ($row['ruser'] == 'Admin') {
                        echo  "<option value='User'>User</option>
                            <option value='Adminn' selected>Admin</option>";
                    } else {
                        echo   "<option value='User' selected>User</option>
                        <option value='1'>Admin</option>";
                    }
                    ?>
                </select>
                <button type="submit" name="submit" class="btn btn-outline-success">Update</button>
        <?php
        }
    }
        ?>
            </form>
</body>

</html>