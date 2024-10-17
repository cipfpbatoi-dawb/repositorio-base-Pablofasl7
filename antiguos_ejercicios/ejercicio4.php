<?php
    $edat = 18;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 4</title>
</head>
<body>
    <h1>Actividad 4</h1>
    <?php

        if ($edat >= 18) {
            echo "Ets major d'edat";
        } elseif ($edat < 0) {
            echo "Edat invàlida";
        } else {
            echo "Ets menor d'edat";
        }
    ?>
</body>
</html>