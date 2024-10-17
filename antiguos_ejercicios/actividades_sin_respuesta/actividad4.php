<?php
    $cadena = "Hola, como estas?"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad 4</title>
</head>
    <h1>Actividad 4</h1>
    <?php
        $numVocals = 0;
        $vocalesMinusculas = ['a', 'e', 'i', 'o', 'u'];

            for ($i= 0; $i < strlen($cadena); $i++) {
                $caracter = strtolower($cadena[$i]);
                if (in_array($caracter, $vocalesMinusculas)) {
                    $numVocals++;
                }
            }
            echo "El total de vocales en la cadena '" . $cadena . "' es de: " . $numVocals;
    ?>
</body>
</html>

<!--
    Otra manera de hacerlo:
            
            (esto iria justo después de la línea del for):

            match (strtolower($cadena[$i])) {
                'a', 'e', 'i', 'o', 'u' => $numVocals,
                default => null,
            };
        
        return $numVocals;
*/ -->


