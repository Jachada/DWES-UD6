<html>
    <head>
        <title>Catálogo libros</title>
    </head>
    <body>
        <h1>Libros dados de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>TITULO</th>
            <th>PRECIO</th>
            <th>ISBN</th>
        </tr>
        <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?php echo $libro['titulo']?></td>
                <td><?php echo number_format($libro['precio'],2)?></td>
                <td><?php echo $libro['isbn']?></td>

            </tr>
        <?php endforeach; ?>
    </table>
    </body>
</html>