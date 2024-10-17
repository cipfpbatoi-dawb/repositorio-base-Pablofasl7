<?php
    session_start();

    // Inicializa el carrito si no está ya en la sesión
    if (!isset($_SESSION["carret"])) {
        $_SESSION["carret"] = [];
    }

    // Establece el producto seleccionado o el valor por defecto "Poma"
    $producte = isset($_POST['producte']) ? $_POST['producte'] : 'Poma';

    // Procesa el formulario cuando se hace un POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $producte = $_POST["producte"];
        $_SESSION["carret"] = $producte; // Añadir el producto al final del array de la sesión
    }
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Selecció de productes</title>
</head>
<body>
    <h1>Afegir productes al carret</h1>
    <form action="" method="POST">
        <label for="producte">Tria un producte: </label>
        <select name="producte" id="producte">
            <option value="Poma" <?php if ($producte === 'Poma') echo 'selected'; ?>>Poma</option>
            <option value="Plàtan" <?php if ($producte === 'Plàtan') echo 'selected'; ?>>Plàtan</option>
            <option value="Taronja" <?php if ($producte === 'Taronja') echo 'selected'; ?>>Taronja</option>
        </select>
        <input type="submit" value="Afegir al carret">
    </form>
    <a href="carret.php">Veure carret</a>
</body>
</html>
