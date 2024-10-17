<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 15 (Información del servidor)</title>
</head>
<body>
    <h1>Actividad 15 (Información del servidor)</h1>

    <?php
        echo "<p><strong>nombre del servidor: </strong>" . $_SERVER["SERVER_NAME"] . "</p>";
        echo "<p><strong>ip del servidor: </strong>" . $_SERVER["SERVER_ADDR"] . "</p>";
        echo "<p><strong>método de solicitud: </strong>" . $_SERVER["REQUEST_METHOD"] . "</p>";
        echo "<p><strong>Agent d'usuari del client:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
        echo "<p><strong>URL de la sol·licitud:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
        echo "<p><strong>Referent:</strong> " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No disponible') . "</p>";
        echo "<p><strong>Protocol utilitzat:</strong> " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
        echo "<p><strong>Port utilitzat:</strong> " . $_SERVER['SERVER_PORT'] . "</p>";
    ?>
</body>
</html>