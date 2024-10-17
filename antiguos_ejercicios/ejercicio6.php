<?php
    $fruites = array("poma", "plàtan", "maduixa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 6</title>
</head>
<body>
    <h1>Actividad 6</h1>
    <p><?php echo "El primer elemento del array es: " . $fruites[0] ?></p>
    <?php $fruites[] = "taronja" ?>
    <p> <?php
        foreach($fruites as $fruita) {
            echo $fruita . "<br>";
        }
        ?>
    </p>
</body>
</html>