<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head><title>DOM-XSS</title></head>
    <body>
        <header><h1>Busca la reseña</h1></header>
        <main>
            <?php
            // Check if session is enabled
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                if (isset($_GET["search"])) {
                    echo '<div id="result">';
                    echo '</div>';
                } else {
                    echo '<form action="buscarResena.php" method="get">';
                    echo '<label>Reseña a buscar:</label><br>';
                    echo '<input type="text" name="search" maxlength="300"/><br>';
                    echo '<input type="submit"/>';
                    echo '</form>';
                    //echo '<p><a href="resena.php">Dejar una reseña</a></p>';
                }
            } else {
                // Session is not enabled, prompt user to login
                echo '<p>Por favor, debe registrase para buscar reseñas.</p>';
                echo '<a href="login.html">Ir al LOGIN</a>';
            }
            ?>
    </main>
        <script>
        var cadenabuscar = (new URLSearchParams(window.location.search)).get('search');
        document.getElementById('result').innerHTML = cadenabuscar;
        </script>
    </body>
</html>
