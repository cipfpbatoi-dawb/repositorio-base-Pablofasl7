<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
        <?php
            // Eliminamos todas las variables de la sesión
            session_unset();

            // Destruimos la sesión
            session_destroy();
        ?>
</body>
</html>