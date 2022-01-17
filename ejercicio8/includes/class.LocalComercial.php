<?php
    include_once "class.Local.php";

    class LocalComercial extends Local {
        private string $razonSocial;
        private string $licencia;

        public function __construct($ciudad, $calle, $numPlantas, $dimensiones, $razonSocial, $licencia) {
            parent::__construct($ciudad, $calle, $numPlantas, $dimensiones);
            if (is_string($razonSocial)) {
                $this->razonSocial = $razonSocial;
            } else {
                echo "ERROR<br>";
                die();
            }
            if (is_string($licencia)) {
                $this->licencia = $licencia;
            } else {
                echo "ERROR<br>";
                die();
            }
        }

        public function __toString() {
            return "<p>".parent::__toString()."</p><p>Razón Social: $this->razonSocial<br></p><p>Número de Licencia: $this->licencia<br></p>";
        }
    }
?>