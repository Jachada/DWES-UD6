<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Catálogo libros</title>
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

    <h1>Personajes de One Piece</h1>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fruta del diablo</th>
                <th>Edad</th>
                <th>Fecha de nacimiento</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personajes as $personaje) : ?>
                <tr>
                    <td><?php echo $personaje["Nombre"] ?></td>
                    <td><?php echo $personaje["FrutaDelDiablo"] ?></td>
                    <td><?php echo number_format($personaje["EdadAnime"]) ?></td>
                    <td><?php echo $personaje["FechaNacimiento"] ?></td>
                    <?php
                    echo "<td><a href='?controller=onePiece&action=mostrarPersonaje&id=$personaje[id]'>Detalles</a></td>";
                    echo "<td><a href='?controller=onePiece&action=editarPersonaje&id=$personaje[id]'>Editar</a></td>";
                    echo "<td><a href='?controller=onePiece&action=eliminarPersonaje&id=$personaje[id]'>Borrar</a></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>