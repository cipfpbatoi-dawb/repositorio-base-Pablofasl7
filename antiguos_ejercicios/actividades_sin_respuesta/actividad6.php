<?php
    $nota = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 6</title>
</head>
<body>
    <h1>Actividad 6</h1>
    <p> <?php
        $nota_final = match (true) {
            $nota === 10 => "Excel·lent",
            $nota === 8 || $nota === 9 => "Molt bé",
            $nota >= 5 && $nota <= 7 => "Bé",
            default => "Insuficient",
        };
        echo $nota_final
        ?>
    </p>
</body>
</html>
