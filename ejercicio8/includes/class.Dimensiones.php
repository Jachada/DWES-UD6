<?php
    class Dimensiones {
        private float $alto;
        private float $ancho;
        private float $largo;

        public function __construct($alto, $ancho, $largo) {
            $this->alto = $alto;
            $this->ancho = $ancho;
            $this->largo = $largo;
        }
        
        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            if(is_float($value) && $value > 1)
                $this->$name=$value;
            else{
                echo "ERROR<br>";
                die();
            }
        }

        public function __toString() {
            return "Alto = ".$this->alto.", Ancho = ".$this->ancho.", Largo = ".$this->largo;
        }
    }
?>