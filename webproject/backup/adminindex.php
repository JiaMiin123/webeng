<?php
require('essentials.php');
require('dbconnect.php');

session_start();
if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
    redirect(('dashboard.php'));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <?php require('links.php'); ?>

    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px
        }
    </style>
</head>
<!-- ADMIN LOGIN PAGE -->
<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="mb-3">
                <input name="admin_name" required type="text" class="form-control shadow-none text-center"
                    placeholder="Admin Name">
            </div>
            <div class="mb-4">
                <input name="admin_password" required type="password" class="form-control shadow-none text-center"
                    placeholder="password">
            </div>
            <button name="login" type="submit" class="btn text-black custom-bg ">Login</button>
    </div>
    </form>
    </div>

    <?php

    if (isset($_POST['login'])) {
        $data = filteration($_POST);

        $query = "SELECT * FROM `admin_table` WHERE `admin_username` = ? AND `admin_password` = ?";
        $values = [$data['admin_name'], $data['admin_password']];
        // $datatypes = "ss";
    
        $res = select($query, $values, 'ss');
        if ($res->num_rows == 1) {
            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminID'] = $row['admin_id'];
            redirect('dashboard.php');
        } else {
            alertMsg("Error", 'Login Failed - Please try again');
        }
    }

    ?>


    <?php require('scripts.php') ?>
</body>

</html>