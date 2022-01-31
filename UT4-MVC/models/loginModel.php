<?php
function getConnection()
{
    $servidor = "localhost";
    $baseDatos = "OnePiece";
    $usuario = "root";
    $pass = "root";
    return new PDO('mysql:host=' . $servidor . ';dbname=' . $baseDatos, $usuario, $pass);
}

function comprobar($nombreUsuario) {
    try {
        $conn = getConnection();
        $sql = $conn -> prepare("SELECT * FROM usuario WHERE Nombre=?");
        $sql -> bindParam(1, $nombreUsuario);
        $sql -> execute();
        $retorno = $sql->fetch(PDO::FETCH_ASSOC);
        return $retorno;
    } catch (PDOException $e) { 
        return -1;
    }
    $conn=null;
} 