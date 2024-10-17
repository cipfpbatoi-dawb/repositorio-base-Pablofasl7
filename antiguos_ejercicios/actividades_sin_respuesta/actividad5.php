<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 5</title>
</head>
    <h1>Actividad 5</h1>
    <?php
        for($i = 1; $i <=5; $i++) {
            echo "<strong>Tabla de multiplicar del $i</strong>\n<br>";
            for($j = 1; $j <=10; $j++) {
                echo "$i * $j = " . $i * $j;
                echo "\n<br>";
            }
            echo "\n<br>";
        }
       
    ?>
</body>
</html>
