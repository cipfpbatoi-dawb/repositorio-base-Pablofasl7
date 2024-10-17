<?php

namespace PMA\Models;

    class Persona {
        private $nom;
        private $cognoms;
        private $edad;

        const LIMITE_EDAD = 66;

        public function __construct($nombre, $cognoms, $edad = 25) {
            $this -> nom = $nombre;
            $this -> cognoms = $cognoms;
            $this -> edad = $edad;
        }

        public function getNom() {
            return $this->nom;
        }
    
        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getCognoms() {
            return $this->cognoms;
        }
    
        public function setCognoms($cognoms) {
            $this->cognoms = $cognoms;
        }

        public function getEdat() {
            return $this-> edad;
        }
    
        public function setEdat($edat) {
            $this->edad = $edat;
        }

        public function getNomComplet() {
            return "Nombre completo: " . $this->nom . " " . $this->cognoms;
        }

        public function estaJubilat() {
            if ($this -> edad >= self::LIMITE_EDAD) {
                return true;
            }
            return false;
        }
    }
?>