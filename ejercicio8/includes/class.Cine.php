<?php
    class Cine extends LocalComercial {
        private int $aforoSala;

        public function __construct($ciudad, $calle, $numPlantas, $dimensiones, $razonSocial, $licencia, $aforoSala) {
            parent::__construct($ciudad, $calle, $numPlantas, $dimensiones, $razonSocial, $licencia);
            if (is_integer($aforoSala) && $aforoSala > 0) {
                $this->aforoSala = $aforoSala;
            } else {
                echo "ERROR<br>";
                die();
            }
        }

        public function __toString() {
            return "<p>".parent::__toString()."</p><p>Aforo: $this->aforoSala<br></p>";
        }
    }
?>