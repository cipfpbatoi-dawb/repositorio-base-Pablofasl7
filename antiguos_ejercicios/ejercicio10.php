<?php
    $producte = "pa";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 10</title>
</head>
<body>
    <h1>Actividad 10</h1>
    <p> <?php
        $preu_producte = match($producte) {
            "pa" => "1.00",
            "llet" => "0.80",
            "formatge" => "2.50",
            default => "0.00",
        };
        echo "El preu de " . $producte . " és " . $preu_producte
        ?>
    </p>
</body>
</html>