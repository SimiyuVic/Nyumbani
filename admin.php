<?php
session_start();
include('templates/header.php');

// Check if the user is logged in and has the admin role
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
     echo 'Welcome,  ' . $username . '!';

    // Admin page content goes here

    // Add a logout link
} else {
    // If the user is not logged in or doesn't have the admin role, redirect to the login page
    header('Location: login.php');
    exit();
}

include('templates/footer.php');
?>
