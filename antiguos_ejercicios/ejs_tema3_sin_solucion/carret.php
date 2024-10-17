<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Visualitzar productes</title>
</head>
<body>
    <h1>Visualitzar productes</h1>

    <?php
        // Verifica que 'carret' exista y sea un array
        if(isset($_SESSION["carret"]) && is_array($_SESSION["carret"])) {
            // Recorre el array de productos
            foreach ($_SESSION["carret"] as $producte) {
                echo $producte . "<br>";
            }
        } else {
            echo "El carrito está vacío.";
        }
    ?>
</body>
</html>