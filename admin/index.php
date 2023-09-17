<?php
include "config.php";
session_start();
if (isset($_SESSION['username'])) {
    header("Location:{$hostname}admin/dashmainpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="project.css">
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .form {
            background-color: #fff;
            display: block;
            max-width: 350px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 25%);
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .form-title {
            font-size: 1.25rem;
            line-height: 1.75rem;
            font-weight: 600;
            text-align: center;
            color: #000;
        }

        .input-container {
            position: relative;
        }

        .input-container input,
        .form button {
            outline: none;
            border: 1px solid #e5e7eb;
            margin: 8px 0;
        }

        .input-container input {
            background-color: #fff;
            padding: 1rem;
            padding-right: 3rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            width: 300px;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .submit {
            display: block;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            background-color: #4F46E5;
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            width: 100%;
            border-radius: 0.5rem;
            text-transform: uppercase;
            cursor: pointer;
        }

        .signup-link {
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.25rem;
            text-align: center;
        }

        .signup-link a {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'];  ?>" method="POST" class="form m-auto login-form text-center rounded overflow-hidden p-4 " style="background-color: #d8d1d1; ">

        <p class="form-title py-4 rounded text-white" style="background-color: #6b6a6a; ">Sign in to your account</p>
        <div class="input-container">
            <input type="text" name="name" placeholder="Enter Name">
            <span>
            </span>
        </div>
        <div class="input-container">
            <input type="password" name="pass" placeholder="Enter password">
        </div>
        <button type="submit" name="login" class="submit btn">Submit</button>
    </form>
    <?php
    include "config.php";
    if (isset($_POST['login'])) {

        $name = $_POST['name'];
        $pswd = $_POST['pass'];

        $query = "SELECT * FROM `udata` WHERE `username` = '{$name}' AND `password` = '{$pswd}'";

        $run  = mysqli_query($add, $query) or die("Query Failed.");

        if (mysqli_num_rows($run) > 0) {


            while ($row = mysqli_fetch_assoc($run)) {
                session_start();

                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_role'] = $row['role'];

                header("Location:{$hostname}admin/welcome.php");
            }
        } else {
            echo '<div class="alert alert-danger w-50">Username and Password are not matched</div>';
        }
    }
    ?>

</body>

</html>