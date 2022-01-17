<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    class Vivienda {
        private string $tipoVivienda;
        private float $valorMercado;

        public function __construct($tipoVivienda, $valorMercado) {
            $this->tipoVivienda = $tipoVivienda;
            $this->valorMercado = $valorMercado;
        }
 
        public function __set($name, $value) {
            switch ($name) {
                case 'tipoVivienda':
                    return $this->$name=$value;
                    break;
                
                case 'valorMercado':
                    if ($value > 0) {
                        return $this->$name=$value;
                    } else {
                        echo "El valor no puede ser menor a 0<br>";
                    }
                    break;
            }
        }

        public function __get($name) {
            return $this->$name;
        }

    }

    $vivienda = new Vivienda("piso", 45500);
    echo $vivienda->tipoVivienda." || ".$vivienda->valorMercado;
    echo "<br>";
    $vivienda->tipoVivienda="apartamento";
    echo $vivienda->tipoVivienda." || ".$vivienda->valorMercado;
    echo "<br>";
    $vivienda->valorMercado=0;
    echo $vivienda->tipoVivienda." || ".$vivienda->valorMercado;
    
    ?>
</body>

</html>