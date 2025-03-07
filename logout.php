<?php
session_start(); // Start the session

session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
// Delete the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}
// Redirect to home page (or login page)
header("Location: index.php");
exit(); // Ensure script stops execution after redirect
?>
