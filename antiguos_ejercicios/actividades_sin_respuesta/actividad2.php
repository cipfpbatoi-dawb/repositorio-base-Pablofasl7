<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 2</title>
</head>
    <h1>Actividad 2</h1>
    <?php
        for($i = 0; $i<21; $i++) {
            if($i %2== 0) {
                echo $i . " - ";
            }
        }
        
        $i = 0;
        echo "\n <br>";

        while($i < 21) {
            if($i %2== 0) {
                echo $i . " | ";
            }
            $i++;
        }
    ?>
</body>
</html>
