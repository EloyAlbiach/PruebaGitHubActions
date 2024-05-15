<?php

    $resena = $_POST["resena"];
    echo '<p>Ana: Me ha gustado mucho el artículo sobre bots, muchas gracias !!!</p>';
    echo '<p>Andrew: A tope con,los bots !!!</p>';
    echo "<p>$resena</p>";

    echo '<form action="resena.php" method="post">';
    echo '<label>Escriba la reseña:</label><br>';
    echo '<input type="text" name="resena" maxlength="300"/><br>';
    echo '<input type="submit" name="enviaresena" value="Entra"/>';
    echo '</form>';

    echo '<p><a href="resena.php">Dejar una reseña</a></p>';
