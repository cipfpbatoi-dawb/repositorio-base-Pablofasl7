<?php
    require_once $_SERVER["DOCUMENT_ROOT"] . '/../vendor/autoload.php';

    use PMA\Models\Cotxe;
    use PMA\Models\Motocicleta;

    $cotxe  = new Cotxe("Toyota", "Corolla");
    echo $cotxe -> mostraInformacio() . "<br>";

?>