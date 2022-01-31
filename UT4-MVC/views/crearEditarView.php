<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Edita elemento</title>
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
    <form class="form-register" action="" method="POST" enctype="multipart/form-data">
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
                <input type="hidden" name="id" value="<?php echo $personaje["id"]; ?>">
                <input type="text" name="nombre" placeholder="Nombre" class="input-100" value="<?php echo $personaje["Nombre"]; ?>" required>
                <input type="text" name="frutaDelDiablo" placeholder="Fruta del Diablo" class="input-100" value="<?php echo $personaje['FrutaDelDiablo']; ?>" required>
                <input type="text" name="raza" placeholder="Raza" class="input-100" value="<?php echo $personaje['Raza']; ?>" required>
                <input type="number" name="edad" placeholder="Edad" class="input-48" value="<?php echo $personaje['EdadAnime']; ?>" required>
                <input type="number" name="altura" placeholder="Altura" class="input-48" value="<?php echo $personaje['Altura']; ?>" required>
                <input type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento" class="input-100" value="<?php echo $personaje['FechaNacimiento']; ?>" required>
                <img name="avatarActual" width=200px src="<?php echo "images/" . $personaje["Imagen"]; ?>"><!-- Aquí tienes que cargar la imagen actual -->
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100">
                <input type="submit" value="Editar" class="btn-enviar">
                <div id="errores"><?php echo $error ?></div>
        </div>
    </form>
</body>

</html>