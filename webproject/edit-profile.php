<?php
error_reporting(0);
require('dbconnect.php');

if (isset($_SESSION['user_id'])) {
  $userId = $_SESSION['user_id'];
} else {
  header("Location: index.php");
  exit;
}

$query = "SELECT * FROM users WHERE id = '$userId'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);
} else {
  echo "Error: " . mysqli_error($conn);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['mypassword'];
    // echo $password;
  $hashedPassword = $user['password'];
  //  echo $hashedPassword;
   
  //  $passwordInfo = password_get_info($user['password']);
  //  if ($passwordInfo['algo'] !== 0) {
  //      echo "The password is hashed.";
  //  } else {
  //      echo "The password is not hashed.";
  //  }
   
  if (password_verify($password, $hashedPassword)) {
    // Passwords match
    $query = "UPDATE users SET name = '$name', email = '$email' WHERE id = '$userId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $success = "Profile updated successfully.";
        header("Location: profile.php?success=" . urlencode($success));
        exit;
          } else {
              echo "Error: " . mysqli_error($conn);
          } 
      } else {
          echo "Invalid password.";
      }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HBS - Edit Profile</title>
    <?php require('links.php'); ?>
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      .edit-profile-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 75vh;
      }

      .edit-profile-form {
        max-width: 400px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }

      .edit-profile-form h2 {
        margin-top: 0;
      }

      .edit-profile-form input[type="text"],
      .edit-profile-form input[type="email"],
      .edit-profile-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }

      .edit-profile-form .btn {
        margin-top: 20px;
      }
    </style>
</head>
<body>
  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Content -->
  <div class="edit-profile-container">
    <form class="edit-profile-form" method="POST" action="edit-profile.php">
      <h2>Edit Profile</h2>
      <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" placeholder=<?php echo $user['name']; ?>>
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" placeholder=<?php echo $user['email']; ?>>
          </div>
          <div class="mb-4">
            <label class="form-label">Password:</label>
            <input type="password" name="mypassword" placeholder="Please Enter Current Password">
          </div>
        </div>
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!-- Scripts -->
</body>
</html>
