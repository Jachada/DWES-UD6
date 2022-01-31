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
    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <h2 class="form-titulo">Login:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="nombreUsuario" placeholder="Nombre Usuario" class="input-100" required>
            <input type="password" name="contrasenia" placeholder="Contraseña" class="input-100" required>
            <input type="submit" value="Registrar" class="btn-enviar">
        </div>
    </form>
</body>

</html>