<?php

// Start the session
session_start();

// Hardcoded username and password (static credentials)
$valid_username = "paras@gmail.com";
$valid_password = "1234";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Simple validation: check if input matches hardcoded credentials
    if ($username == $valid_username && $password == $valid_password) {
        // Successful login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to welcome page
        exit();
    } else {
        // Failed login
        echo "<h3>Invalid username or password</h3>";
    }
}


?>