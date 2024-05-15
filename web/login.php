<?php

session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your username and password
    $username = "userlogin";
    $password = "passlogin";

    // Llegim les dades del formulari filtrant el que no sigui string
    $input_username = htmlspecialchars($_POST['user']);
    $input_password = htmlspecialchars($_POST['pwd']);

    // Check if username and password are correct
    if ($input_username === $username && $input_password === $password) {
        // Set session variables
        $_SESSION["logged_in"] = true;
        $_SESSION["user"] = $input_username;
        $_SESSION["dni"] = '12047003F';
        $_SESSION["num_cuenta"] = '460225410000001348';
        // Set a cookie
        setcookie("username", $input_username, time() + (86400 * 30), "/"); // 86400 = 1 day
        // Redirect to a secure page or do any other necessary action
        header("Location: mostrar_datos.php");
        exit;
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
