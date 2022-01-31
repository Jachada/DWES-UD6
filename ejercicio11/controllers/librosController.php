<?php
function listar() {
    require "./models/librosModel.php";
    $libros = getLibros();
    include "./views/librosView.php";
}

function unLibro() {
    require "./models/librosModel.php";
    $id = $_GET["id"];
    $libros = getLibro($id);
    include "./views/libroView.php";
}
?>