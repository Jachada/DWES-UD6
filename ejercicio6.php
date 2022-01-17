<?php
    include_once "ejercicio5.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
    echo "<br><br>";
    var_dump($equipo instanceof ICampeonato);
    var_dump($equipo instanceof IEquipoFutbol);

    ?>
</body>

</html>