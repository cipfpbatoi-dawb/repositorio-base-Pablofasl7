<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomUsuari = $_POST['nom_usuari'];

    // Emmagatzemar el nom d'usuari en la sessió
    $_SESSION['nom_usuari'] = $nomUsuari;

    // Redireccionar a la pàgina de benvinguda
    header('Location: benvinguda.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sessió</title>
</head>
<body>
    <h2>Iniciar Sessió</h2>
    <form method="post" action="login.php">
        <label for="nom_usuari">Nom d'usuari:</label>
        <input type="text" id="nom_usuari" name="nom_usuari" required>
        <button type="submit">Iniciar Sessió</button>
    </form>
</body>
</html>