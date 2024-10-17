<?php
    $a = 10;
    $b = 5;
    $operacio = '+';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 11</title>
</head>
<body>
    <h1>Actividad 11</h1>
    <p> <?php
        $resultat = match ($operacio) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $a / $b,
        default => 'Operació desconeguda',
    };
    echo "El resultat de $a $operacio $b és $resultat.";  // Sortida: El resultat de 10 + 5 és 15.
        ?>
    </p>
</body>
</html>



