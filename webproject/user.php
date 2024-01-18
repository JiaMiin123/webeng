<?php
error_reporting(0);
require('dbconnect.php');

if (!isset($_SESSION['user_id']) && basename($_SERVER['PHP_SELF']) != 'index.php') {
    header("Location: index.php");
    exit;
}

$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;

$query = "SELECT * FROM users WHERE id = '$userId'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    die("Error: Unable to fetch user data from the database, try disabling user.php first");
}
?>