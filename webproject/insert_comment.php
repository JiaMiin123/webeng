<?php
require('dbconnect.php');

// Perform necessary validation and processing of the comment data
// ...

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $currentDate = date('Y-m-d');

    // Prepare and execute the query to insert the comment
    $query = "INSERT INTO `user_comment` (`uc_name`, `uc_email`, `uc_subject`, `uc_message`, `uc_date`) 
            VALUES ('$name', '$email', '$subject', '$message', '$currentDate')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        // Comment inserted successfully
        $successMessage = 'Comment saved successfully.';
        header("Location: contact.php?success=" . urlencode($successMessage));
        exit();
    } else {
        // Error occurred while inserting the comment
        $errorMessage = 'Error occurred while saving the comment.';
        header("Location: contact.php?error=" . urlencode($errorMessage));
        exit();
    }
} else {
    // Invalid request method
    $errorMessage = 'Invalid request method.';
    header("Location: contact.php?error=" . urlencode($errorMessage));
    exit();
}

// Close the database connection
mysqli_close($conn);
?>