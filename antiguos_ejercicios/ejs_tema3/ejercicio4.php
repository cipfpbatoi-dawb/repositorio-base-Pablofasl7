<?php
    
    if($_SESSION["REQUEST_METHOD" == "GET"]) {
        // Eliminamos la cookie
        setcookie('usuario', '', time() - 3600, '/');
    }

    // Creamos la cookie
    setcookie(
        'usuario',
        'Pablo',
        [
            'expires' => time() + 3600,
            'httponly' => true,
            'secure' => false,
            'samesite' => 'Strict',
        ]
    );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Ejercicio 4</h1>
    <?php
        // Verificar si la cookie ha sido eliminada
        if (isset($_COOKIE['usuario'])) {
            echo "La cookie 'usuario' aún existe con el valor: " . $_COOKIE['usuario'];
        } else {
            echo "La cookie 'usuario' ha sido eliminada.";
        }
    ?>
</body>

</html>