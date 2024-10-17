<?php
    $num1 = 5;
    $num2 = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1</title>
</head>
    <h1>Actividad 1</h1>
    <?php
        function sumar($num1, $num2) {
            return $num1 + $num2;
        }
        function restar($num1, $num2) {
            return $num1 - $num2;
        }
        function multiplicar($num1, $num2) {
            return $num1 * $num2;
        }
        function dividir($num1, $num2) {
            return $num1 / $num2;
        }
    ?>
    <p><?php echo "La suma de los números es: " . sumar($num1, $num2)?></p>
    <p><?php echo "La resta de los números es: " . restar($num1, $num2)?></p>
    <p><?php echo "La multiplicación de los números es: " . multiplicar($num1, $num2)?></p>
    <p><?php echo "La división de los números es: " . dividir($num1, $num2)?></p>
</body>
</html>
