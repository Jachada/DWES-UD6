<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    class Persona {
        private $nombre;
        private $dni;
        private $sexo;
        private $peso;
        private $altura;

        public function __construct($nombre, $dni, $sexo, $peso, $altura) {
            $this->nombre = $nombre;
            $this->dni = $dni;
            $this->sexo = $sexo;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
            return $this;
        }

        public function getDni() {
            return $this->dni;
        }

        public function setDni($dni) {
            $this->dni = $dni;
            return $this;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
            return $this;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
            return $this;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
            return $this;
        }

        public function mostrar() {
            return "Nombre: ".$this->nombre." || DNI: ".$this->dni." || Sexo: ".$this->sexo." || Peso: ".$this->peso." || Altura: ".$this->altura;
        }

        public function __toString() {
            return "Nombre: ".$this->nombre." || DNI: ".$this->dni." || Sexo: ".$this->sexo." || Peso: ".$this->peso." || Altura: ".$this->altura;
        }
    }

    $persona = new Persona("Carmen Rufo", "22222222A", "Mujer", 75, 159);
    echo $persona->mostrar();

    echo "<br>";

    $persona->setNombre("Juan Romero");
    $persona->setDni("44444444B");
    $persona->setSexo("Hombre");
    $persona->setPeso(80);
    $persona->setAltura(170);
    echo $persona->mostrar();
    ?>
</body>

</html>