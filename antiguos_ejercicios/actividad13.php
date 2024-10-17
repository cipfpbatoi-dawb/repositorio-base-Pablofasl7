<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 13</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = htmlspecialchars($_POST["email"]);
            $mensaje = htmlspecialchars($_POST["mensaje"]);

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Muchas gracias por contactarnos!!";
                echo "<p>Tu correo electrónico es: " . $email . "</p>";
                echo "<p>Y tu mensaje es el siguiente: " . $mensaje . "</p>";
            } else {
                echo "<p>Adreça de correu electrònic no vàlida. Si us plau, torna-ho a intentar.</p>";
            }
        } else {
            echo "No se han recibido datos del servidor.";
        }
    ?>
</body>
</html>
