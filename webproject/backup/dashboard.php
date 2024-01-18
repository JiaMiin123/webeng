<?php
require('essentials.php');
adminLogin();
session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel: Dashboard</title>
    <?php require('links.php') ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .navigator {
            width: 200px;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .navigator ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navigator li {
            margin-bottom: 10px;
        }

        .navigator li a {
            text-decoration: none;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navigator li a i {
            margin-right: 10px;
        }

        .navigator li a:hover {
            background-color: #555;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        html,
        body {
            height: 100%;
        }

        .full-height {
            height: 100%;
        }

        .navbar-collapse.show {
            display: block;
        }
    </style>
</head>
<!-- ADMIN PAGE: DASHBOARD -->

<body>
    <!-- NAVIGATOR -->
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky">
        <h3 class="mb-0">Abc Hotel</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-lg-2 col-md-3 col-sm-4 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#adminDropdown" aria-controls="adminDropdown" aria-expanded="true"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="adminDropdown">
                            <ul class="nav flex-lg-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="dashboard.php">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Rooms">Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Rooms">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="settings.php">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 full-height" id="main-content">
                <div class="row">
                    <div class="ms-auto p-4 overflow-hid">
                        </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Add your JavaScript and other dependencies here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar navigation on small screens
        $(document).ready(function () {
            $('.navbar-toggler').on('click', function () {
                $('.navbar-collapse').toggleClass('show');
            });
        });
    </script>
    <?php require('scripts.php') ?>


</body>

</html>