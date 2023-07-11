<?php
// Establish database connection
include_once('config/db_config.php');
session_start();

// Retrieve the username and password from the login form
$username =  $_POST['username'];
$password =  $_POST['password'];

// Query the database to check if the user exists
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query failed: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);
if($row['user_type']=='admin'){
    $_SESSION['username'] = $username;
    header('Location: admin.php');
} else {
    $_SESSION['username'] = $username;
    header('Location: home.php');
}

// Close the database connection and free result
mysqli_free_result($result);

mysqli_close($connection);
?>
