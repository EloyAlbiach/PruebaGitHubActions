<?php

session_start();

// Check if session is enabled
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Session is enabled, display data

    $nombre = $_SESSION['user'];
    $dni = $_SESSION['dni'];
    $cuenta = $_SESSION['num_cuenta'];

    echo '<table border="1">';
    echo '<tr><th>Cliente</th><th>DNI</th><th>Num_Cuenta</th></tr>';
    echo "<tr><td>$nombre</td><td>$dni</td><td>$cuenta</td></tr>";
    echo '</table>';
    echo "Your username: " . $_COOKIE['username'] . "<br>";

    echo '<p><a href="resena.php">Dejar una reseña</a></p>';
} else {
    // Session is not enabled, prompt user to login
    echo '<p>Por favor, debe registrase para ver los datos.</p>';
    echo '<a href="login.html">Ir al LOGIN</a>';
}
