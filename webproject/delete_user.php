<?php
require_once 'dbconnect.php';

$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;

if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
    $id = $userId;

    // Prepare and execute the delete statement
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if the delete operation was successful
    if ($stmt->affected_rows > 0) {
        // Account deleted successfully
        session_destroy(); // Optional: Destroy the session if needed
        header("Location: index.php");
        exit;
    } else {
        echo "User not found.";
    }
} else {
    // Display confirmation alert
    echo '<script>
        var confirmed = confirm("Are you sure you want to delete your account?");
        if (confirmed) {
            window.location.href = "delete_user.php?confirm=true";
        } else {
            window.location.href = "edit-profile.php";
        }
    </script>';
}
?>
