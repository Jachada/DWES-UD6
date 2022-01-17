<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

    abstract class FiguraGeometrica {
        private $color;

        abstract function Dibuja();
        abstract function Area();
    }

    class Cuadrado extends FiguraGeometrica {
        private float $lado;

        public function __construct($color, $lado) {
            $this->lado = $lado;
            $this->color = $color;
        }

        public function Dibuja() {
            return "Cuadrado ".$this->color;
        }

        public function Area() {
            return pow($this->lado,2); 
        }
    }

    class Triangulo extends FiguraGeometrica {
        private float $base;
        private float $altura;

        public function __construct($color, $base, $altura) {
            $this->base = $base;
            $this->altura = $altura;
            $this->color = $color;
        }

        public function Dibuja() {
            return "Triangulo ".$this->color;
        }

        public function Area() {
            return ($this->base * $this->altura)/2; 
        }
    }

    class Circulo extends FiguraGeometrica {
        private float $radio;

        public function __construct($color, $radio) {
            $this->radio = $radio;
            $this->color = $color;
        }

        public function Dibuja() {
            return "Circulo ".$this->color;
        }

        public function Area() {
            return pi(pow($this->radio,2));
        }
    }

    $cuadrado = new Cuadrado("morado", 5);
    $triangulo = new Triangulo("verde", 6, 4);
    $circulo = new Circulo("azul", 3);

    echo "Figura: ".$cuadrado->Dibuja()." || Area: ".$cuadrado->Area();
    echo "<br>";
    echo "Figura: ".$triangulo->Dibuja()." || Area: ".$triangulo->Area();
    echo "<br>";
    echo "Figura: ".$circulo->Dibuja()." || Area: ".$circulo->Area();

    
    ?>
</body>

</html>