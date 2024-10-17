<?php
    $mi_array = array(3, 7, 6, 5, 4)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 3</title>
</head>
    <h1>Actividad 3</h1>
    <?php
        function getArray($array) {
            $sumTotal = 0;
            for ($i = 0; $i < count($array); $i++) {
                $sumTotal += $array[$i];
            }
            $mitjana = $sumTotal / count($array);
            echo "La media del array es: " . $mitjana;
        }

        getArray($mi_array);
    ?>
</body>
</html>
