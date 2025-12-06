<?php
session_start(); // Start session to access session data

session_destroy(); // End all session data (log the user out)

header("Location: login.php"); // Redirect to login page
exit(); // Stop script execution after redirect
?>