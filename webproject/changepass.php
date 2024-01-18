<?php
error_reporting(0);
require('dbconnect.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit;
}

// Initialize error and success messages
$error = $success = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $userId = $_SESSION['user_id'];
  $currentPassword = $_POST["current_password"];
  $newPassword = $_POST["new_password"];
  $confirmPassword = $_POST["confirm_password"];

  // Retrieve the user's current password from the database
  $query = "SELECT password FROM users WHERE id = '$userId'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row["password"];

    // Verify the current password
    if (password_verify($currentPassword, $storedPassword)) {
      // Validate the new password and confirmation
      if ($newPassword === $confirmPassword) {
        // Generate a new hashed password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the user's password in the database
        $updateQuery = "UPDATE users SET password = '$hashedPassword' WHERE id = '$userId'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
          $success = "Password changed successfully.";
        header("Location: profile.php?success=" . urlencode($success));
        } else {
          $error = "Error updating password: " . mysqli_error($conn);
          header("Location: profile.php?error=" . urlencode($error));
        }
      } else {
        $error = "New password and confirmation do not match.";
        header("Location: profile.php?error=" . urlencode($error));
      }
    } else {
      $error = "Invalid current password.";
      header("Location: profile.php?error=" . urlencode($error));
    }
  } else {
    $error = "Error retrieving user information: " . mysqli_error($conn);
    header("Location: profile.php?error=" . urlencode($error));

  }

}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HBS - Change Password</title>
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
    <form class="edit-profile-form" method="POST" action="changepass.php">
      <h2>Change Password</h2>
      <div class="modal-body">
        <br>
        <div class="mb-3">
          <label class="form-label">Current Password:</label>
          <input type="password" name="current_password" placeholder="Please Enter Current Password">
        </div>
        <div class="mb-3">
          <label class="form-label">New Password:</label>
          <input type="password" name="new_password" placeholder="Please Enter New Password">
        </div>
        <div class="mb-4">
          <label class="form-label">Comfirm New Password:</label>
          <input type="password" name="confirm_password" placeholder="Please Enter Again New Password">
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