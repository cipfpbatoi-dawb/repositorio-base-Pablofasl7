<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Alta Llibre</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
        <?php
            $moduleError = "";
            $publisherError = "";
            $priceError = "";
            $pagesError = "";
            $statusError = "";
            $errors = array();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["module"])) {
                    $moduleError = "Has de seleccionar un mòdul.";
                    $errors['moduleError'] = $moduleError;
                }
    
                if (empty($_POST["publisher"])) {
                    $publisherError = "Has d'introduir una editorial.";
                    $errors['publisherError'] = $publisherError;
                }
    
                // Validació del camp "price"
                if (empty($_POST["price"])) {
                    $priceError = "Has d'introduir un preu.";
                    $errors['priceError'] = $priceError;
                } elseif (!is_numeric($_POST["price"])) {
                    $priceError = "El preu ha de ser un valor numèric.";
                    $errors['priceError'] = $priceError;
                }
    
                // Validació del camp "pages"
                if (empty($_POST["pages"])) {
                    $pagesError = "Has d'introduir el nombre de pàgines.";
                    $errors['pagesError'] = $pagesError;
                } elseif (!is_numeric($_POST["pages"])) {
                    $pagesError = "El nombre de pàgines ha de ser un valor numèric.";
                    $errors['pagesError'] = $pagesError;
                }
    
                // Validació del camp "status"
                if (empty($_POST["status"])) {
                    $statusError = "Has de seleccionar un estat.";
                    $errors['statusError'] = $statusError;
                }
    
                // Si hi ha errors, redirigir amb els errors al formulari original
                if (!empty($errors)) {
                    $query_string = http_build_query($errors);
                    header("Location: form.html?$query_string");
                    exit();
                } else {
                    // Si no hi ha errors, mostrar la informació recollida
                    echo "<h2>Registre complet!</h2>";
                    echo "<p>Mòdul seleccionat: " . htmlspecialchars($_POST["module"]) . "</p>";
                    echo "<p>Editorial: " . htmlspecialchars($_POST["publisher"]) . "</p>";
                    echo "<p>Preu: " . htmlspecialchars($_POST["price"]) . "</p>";
                    echo "<p>Pàgines: " . htmlspecialchars($_POST["pages"]) . "</p>";
                    echo "<p>Estat: " . htmlspecialchars($_POST["status"]) . "</p>";
    
                    // Si es puja una foto
                    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
                        $photoName = basename($_FILES["photo"]["name"]);
                        echo "<p>Foto: " . htmlspecialchars($photoName) . "</p>";
                    }
    
                    echo "<p>Comentaris: " . htmlspecialchars($_POST["comments"]) . "</p>";
                }
            }
        ?>
</body>
</html>

