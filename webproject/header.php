<?php
require('user.php');
?>

<head>
  <style>
    .modal {
      z-index: 9999;
    }
  </style>
</head>
<link rel="stylesheet" href="css/common.css">
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">UUM HOTEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex align-items-center position-relative">
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
          <div class="dropdown">
            <a class="btn btn-outline-dark shadow-none me-lg-3 me-2 dropdown-toggle" href="#" role="button"
              id="profileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome, <span style="font-style: italic; text-decoration: underline; color: blue;">
                <?php echo $user['name']; ?>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
              <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="edit-profile.php">Edit Profile</a></li>
              <li><a class="dropdown-item" href="changepass.php">Change Password</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </div>
        <?php else: ?>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        <?php endif; ?>
      </div>
      </form>
    </div>
  </div>
  <script>
    var currentUrl = window.location.href;
    var navLinks = document.querySelectorAll('.nav-link');
    for (var i = 0; i < navLinks.length; i++) {
      var link = navLinks[i];
      if (link.href === currentUrl) {
        link.classList.add('active');
      }
    }
  </script>
</nav>
<!-- LOGIN -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="login.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>
            User Login
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none" name="email">
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none" name="password">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow-none">Login</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>


<!-- REGISTER -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="register.php" method="POST" id="registrationForm" onsubmit="return validateForm()">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
            User Registration
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
            Note: Your details must match your IC/PASSPORT, which will be required during check-in.
          </span>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none" name="name" required>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none" name="email" required>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control shadow-none" name="phonenumber" required>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control shadow-none" rows="1" name="address" required></textarea>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">StateCode</label>
                <input type="text" class="form-control shadow-none" name="statecode" required>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control shadow-none" name="dateofbirth" required>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none" name="password" id="password" required>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control shadow-none" name="confirm_password" id="confirm_password"
                  required>
              </div>
            </div>
          </div>
          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">Register</button>
          </div>
        </div>
      </form>
      <script>
        function validatePassword() {
          var password = document.getElementById("password").value;
          var confirmPassword = document.getElementById("confirm_password").value;
          if (password != confirmPassword) {
            alert("Password and Confirm Password do not match.");
            return false;
          }
          return true;
        }
        document.getElementById("registrationForm").addEventListener("submit", function (event) {
          if (!validatePassword()) {
            event.preventDefault();
          }
        });
      </script>
      <script>
        function validateForm() {
          var inputs = document.querySelectorAll("#registrationForm input, #registrationForm textarea");
          for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value.trim() === "") {
              alert("Please fill in all the fields.");
              return false;
            }
          }
          return true;
        }
      </script>
    </div>
  </div>
</div>