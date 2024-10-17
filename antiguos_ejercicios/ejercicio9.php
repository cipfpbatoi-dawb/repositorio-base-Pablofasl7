<?php
    $nota = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 9</title>
</head>
<body>
    <h1>Actividad 9</h1>
    <p> <?php
        $nota_final = match ($nota) {
            10 => "Excel·lent",
            8, 9 => "Molt bé",
            5, 6, 7 => "Bé",
            default => "Insuficient",
        };
        echo $nota_final
        ?>
    </p>
</body>
</html>