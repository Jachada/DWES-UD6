<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

    interface IEquipoFutbol{
        public function getNumeroJugadores();
        public function juegaPartido();
    }

    interface ICampeonato {
        public function campeonato();
    }

    class EquipoFutbol implements IEquipoFutbol, ICampeonato {
        private $numeroJugadores;
        private $nombreEquipo;
        private $nombreCampeonato;

        public function __construct($numeroJugadores, $nombreEquipo, $nombreCampeonato) {
            $this->numeroJugadores = $numeroJugadores;
            $this->nombreEquipo = $nombreEquipo;
            $this->nombreCampeonato = $nombreCampeonato;
        }

        public function getNumeroJugadores() {
            return $this->numeroJugadores;
        }

        public function juegaPartido() {
            return $this->nombreEquipo." VICTORIA";
        }

        public function campeonato()
        {
            return $this->nombreCampeonato;
        }

    }

    $equipo = new EquipoFutbol(15, "Asden", "Amistoso");
    echo $equipo->getNumeroJugadores();
    echo "<br>";
    echo $equipo->juegaPartido();
    echo "<br>";
    echo $equipo->campeonato();
    ?>
</body>

</html>