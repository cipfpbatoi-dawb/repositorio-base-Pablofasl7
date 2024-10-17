<?php
    // Iniciamos la sesión.
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
        <?php
            // Guardamos el nombre y el rol del usuario en la sesión.
            $_SESSION["nombre"] = "Pablo";
            $_SESSION["rol"] = "admin";

            // Mostramos el nombre de usuario y el rol que tenemos almacenado en la sesión.
            echo "<p>El nombre guardado en la sesion es: " . $_SESSION["nombre"] . " </p>";
            echo "<p>El rol guardado en la sesion es: " . $_SESSION["rol"] . " </p>";

            echo "<h2>Usando el array:</h2>";
            // Otra forma de recorrer el array (el array de la Sesion).
            foreach ($_SESSION as $clave => $valor) {
                echo "<p>$clave = $valor</p>";
            }
        ?>
</body>
</html>

