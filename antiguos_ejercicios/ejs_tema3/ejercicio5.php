<?php
    if(isset($_COOKIE["usuario"])) {
        $usuario = $_COOKIE["usuario"];

        // Modificamos el valor de la cookie
        $salutacio = "Hola muy buenas $usuario";
        setcookie('usuario', $salutacio, time() + 3600, '/');
    } else {
        echo "Cookie not found.";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 5</h1>

    <?php
        // Si existe la cookie "salutacio", la mostramos
        if (isset($_COOKIE['usuario'])) {
            echo "<p>" . $_COOKIE['usuario'] . "</p>";
        } else {
            echo "<p>Cookie 'usuario' not found.</p>";
        }
    ?>
</body>

</html>