<?php
// error_reporting(0);
require('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user data from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // User exists, verify the password
        $row = $result->fetch_assoc();
        $enteredPassword = $_POST["password"];
        $storedHashedPassword = $row["password"];

        if (password_verify($enteredPassword, $storedHashedPassword)) {
            // Password is correct, set session variables and redirect to homepage
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["loggedin"] = true;
            echo "<script>
                alert('Logged in successfully.');
                window.location.href = 'index.php';
                </script>";
            exit;
        } else {
            // Invalid password
            echo "<script>alert('Wrong password.');
            window.location.href = 'index.php';</script>";

        }
    } else {
        // Invalid email
        echo "<script>alert('Invalid email or password.');
        window.location.href = 'index.php';</script>";

    }
}

$conn->close();
?>
