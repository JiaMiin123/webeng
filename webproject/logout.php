<?php
session_start(); // Start the session

// Unset the $_SESSION["loggedin"] variable
unset($_SESSION["loggedin"]);

// Redirect to the homepage or any other desired page
header("Location: index.php");
exit;
?>
