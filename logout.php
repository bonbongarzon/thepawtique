<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // Perform any necessary logout actions, such as clearing session variables or destroying the session

    // Clear all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to a different page after logout
    header("Location: index.php"); // Replace 'index.php' with the desired page

    // Make sure that code below the redirect is not executed
    exit;
} else {
    // User is not logged in, redirect to the login page or another appropriate page
    header("Location: login.php"); // Replace 'login.php' with the desired page

    // Make sure that code below the redirect is not executed
    exit;
}
?>
