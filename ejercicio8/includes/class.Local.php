<?php
    class Local {
        private string $ciudad;
        private string $calle;
        private int $numPlantas;
        private Dimensiones $dimensiones;

        public function __construct($ciudad, $calle, $numPlantas, $dimensiones) {
            if (is_string($ciudad)) {
                $this->ciudad = $ciudad;
            } else {
                echo "ERROR<br>";
                die();
            }
            if (is_string($calle)) {
                $this->calle = $calle;
            } else {
                echo "ERROR<br>";
                die();
            }
            if (is_integer($numPlantas) && $numPlantas >= 1 && $numPlantas <= 10) {
                $this->numPlantas = $numPlantas;
            } else {
                echo "ERROR<br>";
                die();
            }
            if ($dimensiones instanceof Dimensiones) {
                $this->dimensiones = $dimensiones;
            } else {
                echo "ERROR<br>";
                die();
            }
        }

        public function __get($name) {
            return $this->$name;
        }

        public function getDimensiones() {
            return $this->dimensiones;
        }

        public function __toString() {
            return "<p>Ciudad: $this->ciudad <br></p><p>Calle: $this->calle<br></p><p>Plantas: $this->numPlantas<br></p><p>Dimensiones: ($this->dimensiones)<br></p>";
        }

        public function __clone() {
            $this->dimensiones = clone $this->dimensiones;
        }
    }
?>