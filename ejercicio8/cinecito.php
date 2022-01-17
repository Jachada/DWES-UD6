<?php
spl_autoload_register(function($name) {
    include_once 'includes/class.' . $name . '.php';
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
</head>
<body>
    <?php
        $cines[0] = new Cine('Este', 'Calle Amanecer', 2, new Dimensiones(12., 6., 18.),'No se', 'ABC123', 150);
        $cines[1] = new Cine('Norte', 'Calle Aterdecer', 1, new Dimensiones(24., 12., 21.),'Que', 'ZYX098', 100);
        $cines[2] = new Cine('Oeste', 'Calle Anochecer', 7, new Dimensiones(14., 12., 21.),'Poner', 'MNL56', 50);
        
        $copia = clone $cines[1];
        $copia->dimensiones->alto = 25.;
        $copia->dimensiones->ancho = 8.;
        $copia->dimensiones->largo = 22.;
        
        foreach ($cines as $cine)
           echo "$cine<br>";
        echo $copia;
    ?>
</body>
</html>