<?php
function getConnection() {
    $user='root';
    $password = 'root';
    return new PDO('mysql:host=localhost;dbname=Periodico', $user, $password);
}

function getPeriodicos() {
    $db = getConnection();
    $result = $db->query('SELECT * FROM Periodico');
    $periodicos = array();
    while ($periodico = $result->fetch())
        $periodicos[] = $periodico;

    return $periodicos;
}

?>