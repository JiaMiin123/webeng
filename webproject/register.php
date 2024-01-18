<?php
// error_reporting(0);
require('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
    $statecode = $_POST["statecode"];
    $dateofbirth = $_POST["dateofbirth"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, phone_number, address, state_code, date_of_birth, password) 
    VALUES ('$name', '$email', '$phonenumber', '$address', '$statecode', '$dateofbirth', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Registered successfully.');
        window.location.href = 'index.php';
        </script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
