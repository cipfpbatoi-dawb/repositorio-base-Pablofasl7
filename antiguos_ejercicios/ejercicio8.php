<?php
    function afegir_element($array, $element) {
        $array[] = $element;
        return $array;
    }
    $animals = ["gat", "gos"];
    $animals = afegir_element($animals, "conill");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 8</title>
</head>
<body>
    <h1>Actividad 8</h1>
    <p> <?php
        foreach($animals as $animal) {
            echo $animal . "<br>";
        }
        ?>
    </p>
</body>
</html>