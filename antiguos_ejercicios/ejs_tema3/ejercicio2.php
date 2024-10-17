<?php
    // Iniciamos la sesión.
    session_start();

    // Regenera el id de inicio de sesión del usuario y nos da uno nuevo.
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
        <?php
            // Mostramos el nombre de usuario y el rol que tenemos almacenado en la sesión.
            echo "<p>El nombre guardado en la sesion es: " . $_SESSION["nombre"] . " </p>";
            echo "<p>El rol guardado en la sesion es: " . $_SESSION["rol"] . " </p>";
        ?>
</body>
</html>