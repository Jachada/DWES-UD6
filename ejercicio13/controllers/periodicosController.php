<?php
function listar() {
    require "./models/periodicosModel.php";
    $periodicos = getPeriodicos();
    include "./views/periodicosView.php";
}

function unPeriodico() {
    require "./models/periodicosModel.php";
    $id = $_GET["id"];
    $periodicos = getPeriodico($id);
    include "./views/periodicoView.php";
}
?>