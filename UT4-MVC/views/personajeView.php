<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/view.css">
    <title>Vista detalle</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="?controller=onePiece&action=listar">Página principal</a></li>
            <li><a href="?controller=onePiece&action=crearPersonaje">Nuevo elemento</a></li>
            <li><a href="?">Iniciar Sesion</a></li>
            <li><a href="?action=cerrarSesion">Cerrar Sesion</a></li>
        </ul>
    </nav>

    <div class="container">
        <header>
            <div class="bio">
                <img src="<?php echo "images/" . $personaje["Imagen"]; ?>" alt="background" class="bg">
                <!--aquí va el link a la imagen-->
                <div>
                    <h3><?php echo $personaje["Nombre"]; ?></h3>
                    <!--aquí va el valor del texto 1-->
                    <p>Fruta del diablo: <?php echo $personaje["FrutaDelDiablo"]; ?></p><!-- aquí va el valor del texto 2-->
                    <p>Raza: <?php echo $personaje["Raza"]; ?></p><!-- aquí va el valor del texto 3-->
                </div>
            </div>
        </header>

        <div class="content">
            <div class="data">
                <ul>
                    <li>
                        <?php echo $personaje["Altura"]; ?>
                        <!-- aquí va el valor del número 1-->
                        <span>Altura</span><!-- pon aquí el nombre de tu número 1-->
                    </li>
                    <li>
                        <?php echo $personaje["EdadAnime"]; ?>
                        <!-- aquí va el valor del número 2-->
                        <span>Edad</span><!-- pon aquí el nombre de tu número 2-->
                    </li>
                    <li>
                        <?php echo $personaje["FechaNacimiento"]; ?>
                        <!-- aquí va el valor de la fecha-->
                        <span>Fecha nacimiento</span><!-- pon aquí el nombre de tu fecha-->
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>