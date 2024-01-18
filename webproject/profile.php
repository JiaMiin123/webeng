<?php
error_reporting(0);
require('user.php');
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HBS</title>
  <?php require('links.php'); ?>
  <style>
    .profile-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 75vh;
    }

    .profile-form {
      max-width: 400px;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .profile-form h2 {
      margin-top: 0;
    }

    .profile-form p {
      margin-bottom: 10px;
    }

    .profile-form .btn {
      margin-top: 20px;
    }

    .card_profile_img {
      width: 120px;
      height: 120px;
      background-color: #868d9b;
      background: url("https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      border: 2px solid #ffffff;
      border-radius: 120px;
      margin: 0 auto;
      margin-top: -60px;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <?php include 'header.php';

  if (isset($_GET['success'])) {
    $success = $_GET['success']; ?>
    <br>
    <div class="container">
      <div class="alert alert-success">
        <?php echo $success; ?>
      </div>
    </div>
    <?php
  }
  if (isset($_GET['error'])) {
    $error = $_GET['error']; ?>
    <br>
    <div class="container">
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    </div>
    <?php
  }
  ?>


  <!-- Content -->
  <div class="profile-container">
    <form class="profile-form">
      <!-- <img src="profile-picture.jpg" alt="Profile Picture" class="profile-picture"> -->
      <div class="card_profile_img"></div>
      <h2>
        <?php echo $user['name']; ?>
      </h2>
      <p>Email:
        <?php echo $user['email']; ?>
      </p>
      <p>Phone:
        <?php echo $user['phone_number']; ?>
      </p>
      <p>Address:
        <?php echo $user['address']; ?>
      </p>
      <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
      <a href="logout.php" class="btn btn-danger">Logout</a>
      <a href="booking_details.php" class="btn btn-info">Booking Details</a>
      <br> 
      <a href="delete_user.php" class="btn btn-danger">Delete Account</a>

    </form>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!-- Scripts -->
</body>

</html>