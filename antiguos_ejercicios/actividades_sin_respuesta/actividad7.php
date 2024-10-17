<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 7</title>
</head>
    <h1>Actividad 7</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Nombre: </label><br>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Correo electrónico: </label><br>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="password">Contraseña: </label><br>
        <input type="password" id="password" name="password" required minlength="8">
        <br><br>

        <label for="confirmPassword">Confirma la contraseña:</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <br><br>

        <button type="submit">Registrarse</button>
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];
        
            $errors = [];
            $successMessage = "";
        
            if (empty($name)) {
                $errors[] = "El nom és obligatori.";
            }
        
            if (empty($email)) {
                $errors[] = "El correu electrònic és obligatori.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "El correu electrònic no és vàlid.";
            }
        
            if (empty($password)) {
                $errors[] = "La contrasenya és obligatòria.";
            } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/", $password)) {
                $errors[] = "La contrasenya ha de tenir almenys 8 caràcters, incloent una majúscula, una minúscula, un número i un caràcter especial.";
            }
        
            if (empty($confirmPassword)) {
                $errors[] = "Has de confirmar la contrasenya.";
            } elseif ($password !== $confirmPassword) {
                $errors[] = "Les contrasenyes no coincidixen.";
            }
        
            if (empty($errors)) {
                echo "<p class='success'>Usuari registrat correctament!</p>";
            } else {
                echo "<h2>Errors en el formulari:</h2>";
                echo "<ul class='error'>";
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul>";
            }
        }
    ?>
</body>
</html>
