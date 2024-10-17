<?php
    function suma($num1, $num2) {
        return $num1 + $num2;
    }
    function multiplicacio($num1, $num2) {
        return $num1 * $num2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 3</title>
</head>
<body>
    <h1>Actividad 3</h1>
    <p><?php echo "La suma de 5 + 3 es = " . suma(5, 3)?></p>
    <p><?php echo "La multiplicación de 5 * 3 es = " . multiplicacio(5, 3)?></p>
</body>
</html>
