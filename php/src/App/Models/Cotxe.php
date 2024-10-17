<?php

namespace PMA\Models;

class Cotxe extends Vehicle {
    private String $marca;
    private String $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModel() {
        return $this->modelo;
    }

    public function setModel($model) {
        $this->modelo = $model;
    }

    public function mostraInformacio() {
        return "La marca del coche es: " . $this->marca . ", y el modelo: " . $this->modelo . "." ;
    }
}

$cotxe = new Cotxe("Ford", "Fiesta");
echo $cotxe->mostraInformacio(); // Output: Marca: Ford, Model: Fiesta

?>