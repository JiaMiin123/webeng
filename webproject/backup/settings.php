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
    <title>Admin Panel: Settings</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

</head>

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
                                    <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Rooms">Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="Rooms">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="settings.php">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 full-height" id="main-content">
                <div class="row">
                    <div class="ms-auto p-4 overflow-hid">
                        <h3 class="ms-4">Settings</h3>
                        <!-- GENERAL -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex p-3 align-items-center justify-content-between">
                                    <h5 class="card-title m-0">General Settings</h5>
                                    <button type="button"
                                        class="btn btn-dark shadow-none btn-sm border border-secondary"
                                        data-bs-toggle="modal" data-bs-target="#general-s">
                                        <i class="bi bi-pencil "></i> Edit
                                    </button>
                                </div>
                                <div>
                                    <h6 class="d-flex card-subtitle mb-1 fw-bold p-3">Site Title</h6>
                                    <p class="card-text p-3" id="site_title"></p>
                                    <h6 class="card-subtitle mb-1 fw-bold p-3">About Us</h6>
                                    <p class="card-text p-3 " id="site_about"></p>
                                </div>
                                <!-- ... -->
                            </div>
                            <div class=" modal fade" id="general-s" data-bs-backdrop="static" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">General Settings</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Site Title</label>
                                                    <input type="text" name="site_title" id="site_title_inp"
                                                        class="form-control shadow-none">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">About Us</label>
                                                    <textarea name="site_about" id="site_about_inp"
                                                        class="form-control shadow-none" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                    onclick="site_title.value = general_data.site_title,site_about.value = general_data.site_about"
                                                    class="btn btn-secondary text-white shadow-none"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button"
                                                    class="btn btn-dark custom-bg text-white shadow-none"
                                                    onclick="upd_general(site_title.value,site_about.value)">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add your JavaScript and other dependencies here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <?php require('scripts.php') ?>

    <script>


        let general_data;

        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let site_title_inp = document.getElementById('site_title_inp');
            let site_about_inp = document.getElementById('site_about_inp');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

            }

            xhr.send('get_general');
        }

        function upd_general(stile_title_val, site_about_val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
                // general_data = JSON.parse(this.responseText);

                // site_title.innerText = general_data.site_title;
                // site_about.innerText = general_data.site_about;

                // site_title_inp.value = general_data.site_title;
                // site_about_inp.value = general_data.site_about;

            }
            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val);

        }
        window.onload = function () {
            get_general();

        }

    </script>
</body>

</html>