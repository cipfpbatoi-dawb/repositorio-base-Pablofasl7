<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 12</title>
</head>
<body>
    <h1>Actividad 12</h1>
    <h2>Formulario de bienvenida (redirigido a otra página):</h2>
    
    <form action="benvinguda.php" method="post">
        <label for="nombre">Introduce tu nombre: </label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="edad">Introduce tu edad: </label><br>
        <input type="text" id="edad" name="edad"><br><br>
        <input type="submit" value="Enviar">
    </form> <br><br>

    <h2>Formulario de bienvenida (se refresca abajo):</h2>

    <form action="" method="post">
        <label for="nombre">Introduce tu nombre: </label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="edad">Introduce tu edad: </label><br>
        <input type="text" id="edad" name="edad"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $edad = htmlspecialchars($_POST["edad"]);
            echo "<h2>Benvingut/da, $nombre!</h2>";
            echo "<p>Tens $edad anys.</p>";
        } else {
            echo "<p>Si us plau, completa el formulari.</p>";
        }
    ?>
</body>
</html>
