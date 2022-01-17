<?php
    include_once "ejercicio1.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
    class Trabajador extends Persona {
        private $nombreEmpresa;

        public function __construct($nombre, $dni, $sexo, $peso, $altura, $nombreEmpresa) {
            parent::__construct($nombre, $dni, $sexo, $peso, $altura);
            $this->nombreEmpresa = $nombreEmpresa;
        }
 
        public function getNombreEmpresa() {
            return $this->nombreEmpresa;
        }

        public function setNombreEmpresa($nombreEmpresa) {
            $this->nombreEmpresa = $nombreEmpresa;
        }

        public function mostrar() {
            return parent::mostrar();
        }

        public function mostrarTodo() {
            return parent::mostrar()." || Nombre empresa: ".$this->nombreEmpresa;
        }

        public function __toString() {
            return parent::__toString()." || Nombre empresa: ".$this->nombreEmpresa; 
        }
    }

    echo "<br><br>";
    $trabajador = new Trabajador("Carmen Rufo", "22222222A", "Mujer", 75, 159, "Scopely");
    echo $trabajador->mostrar();
    echo "<br>";
    echo $trabajador->mostrarTodo();
    echo "<br><br>";
    echo $trabajador;
    ?>
</body>

</html>