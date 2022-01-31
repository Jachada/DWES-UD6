<html>
    <head>
        <title>Catálogo periodicos</title>
    </head>
    <body>
        <h1>Nombre y fecha del periodico</h1>
        <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>FECHA</th>
        </tr>
        <?php foreach ($periodicos as $periodico): ?>
            <tr>
                <td><?php echo $periodico['Nombre']?></td>
                <td><?php echo $periodico['Fecha']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </body>
</html>