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
<form action="newbook.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="module">Mòdul:</label>
        <select id="module" name="module">
            <?php
                $matriz = array("","DIW", "DWEC", "DWES", "DAW");
                foreach ($matriz as $valor) {
                    echo "<option value=\"$valor\">" . htmlspecialchars($valor) . "</option>";
                }
            ?>
        </select>
        <span class="error">
            <?php if
                (isset($_GET['moduleError'])) {
                    echo $_GET['moduleError'];
                }
            ?>
        </span>
    </div>
    <div>
        <label for="publisher">Editorial:</label>
        <input type="text" id="publisher" name="publisher" value="">
        <span class="error"><?php if
                (isset($_GET['publisherError'])) {
                    echo $_GET['publisherError'];
                }
            ?></span>
    </div>
    <div>
        <label for="price">Preu:</label>
        <input type="text" id="price" name="price" value="">
        <span class="error">
            <?php
                if (isset($_GET['priceError'])) {
                    echo htmlspecialchars($_GET['priceError']);
                }
            ?>
        </span>
    </div>
    <div>
        <label for="pages">Pàgines:</label>
        <input type="text" id="pages" name="pages" value="">
        <span class="error">
            <?php
                if (isset($_GET['pagesError'])) {
                    echo htmlspecialchars($_GET['pagesError']);
                }
            ?>
        </span>
    </div>
    <div>
        <label for="status">Estat:</label>
        <?php
            $radio_options = array("Nuevo", "Semi nuevo", "Desgastado", "Mal estado");
            foreach ($radio_options as $option) {
                echo "<input type=\"radio\" name=\"status\" value=\"$option\" /> $option";
            }
        ?>
         <span class="error">
            <?php
                if (isset($_GET['statusError'])) {
                    echo htmlspecialchars($_GET['statusError']);
                }
            ?>
         </span>
    </div>
    <div>
        <label for="photo">Foto:</label>
        <input type="file" id="photo" name="photo">
    </div>
    <div>
        <label for="comments">Comentaris:</label>
        <textarea id="comments" name="comments"></textarea>
    </div>
    <div>
        <button type="submit">Donar d'alta</button>
    </div>
</form>
</body>
</html>

