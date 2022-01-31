<?php
function listar() {
    require "./models/periodicosModel.php";
    $periodicos = getPeriodicos();
    include "./views/periodicosView.php";
}

?>