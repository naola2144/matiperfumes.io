<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.html");
    exit();
}

// Admin dashboard content
echo "<h1>Welcome to the Admin Dashboard, " . htmlspecialchars($_SESSION['admin']) . "!</h1>";
echo "<p><a href='logout.php'>Logout</a></p>";

// Include more dashboard functionality here
?>