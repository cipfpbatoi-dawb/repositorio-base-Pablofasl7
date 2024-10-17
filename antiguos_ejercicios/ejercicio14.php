<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 14</title>
</head>
<body>
    <h1>Actividad 14</h1>

    <form action="" method="post">
        <label for="name">Introduce tu nombre: </label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Escribe tu email: </label><br>
        <input type="text" id="email" name="email"><br><br>
        <label for="age">Escribe tu edad: </label><br>
        <input type="text" id="age" name="age"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $name = "Pablo";
        $email = "pablo@gmail.com";
        $age = 20;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $age = htmlspecialchars($_POST["age"]);

            $resultado = match (true) {
                empty($name) => "El campo nombre esta vacío.",
                !filter_var($email, FILTER_VALIDATE_EMAIL) => "El correo electrónico no es válido.",
                empty($age) => "El campo edad esta vacío.",
                default => "El formulario está correcto."
            };
            echo $resultado;
        }
    ?>
</body>
</html>
