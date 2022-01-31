<?php
function getConnection()
{
    //$user='root';
    //$password = 'root';
    //return new PDO('mysql:host=localhost;dbname=OnePiece', $user, $password);

    $servidor = "localhost";
    $baseDatos = "OnePiece";
    $usuario = "root";
    $pass = "root";
    return new PDO('mysql:host=' . $servidor . ';dbname=' . $baseDatos, $usuario, $pass);
}

function getListar()
{
    try {
        $conn = getConnection();
        $sql = $conn->prepare("SELECT * FROM Personajes");
        $sql->execute();
        $matriz = [];
        while ($personaje = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $personaje;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $conn = null;
}

function createPersonaje($nombre, $frutaDelDiablo, $raza, $edadAnime, $fechaNacimiento, $altura, $imagen)
{
    try {
        $conn = getConnection();
        $sql = $conn->prepare("INSERT INTO Personajes (Nombre, FrutaDelDiablo, Raza, EdadAnime, FechaNacimiento, Altura, Imagen) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql->bindParam(1, $nombre);
        $sql->bindParam(2, $frutaDelDiablo);
        $sql->bindParam(3, $raza);
        $sql->bindParam(4, $edadAnime);
        $sql->bindParam(5, $fechaNacimiento);
        $sql->bindParam(6, $altura);
        $sql->bindParam(7, $imagen);
        $sql->execute();
        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        return -1;
    }
    $conn = null;
}

function getPersonaje($id)
{
    try {
        $conn = getConnection();
        $sql = $conn->prepare("SELECT * FROM Personajes WHERE id=?");
        $sql->bindParam(1, $id);
        $sql->execute();
        $personaje = $sql->fetch();
        return $personaje;
    } catch (PDOException $e) {
        echo "Connection fallida: " . $e->getMessage();
        return null;
    }
    $conn = null;
}

function editPersonaje($id, $nombre, $frutaDelDiablo, $raza, $edadAnime, $fechaNacimiento, $altura, $imagen)
{
    try {
        $conn = getConnection();
        $sql = $conn->prepare("UPDATE Personajes SET Nombre=?, FrutaDelDiablo=?, Raza=?, EdadAnime=?, FechaNacimiento=?, Altura=?, Imagen=? WHERE id=?");
        $sql->bindParam(1, $nombre);
        $sql->bindParam(2, $frutaDelDiablo);
        $sql->bindParam(3, $raza);
        $sql->bindParam(4, $edadAnime);
        $sql->bindParam(5, $fechaNacimiento);
        $sql->bindParam(6, $altura);
        $sql->bindParam(7, $imagen);
        $sql->bindParam(8, $id);
        $result = $sql->execute();
        return $result;
    } catch (PDOException $e) {
        return false;
    }
}

function deletePersonaje($id)
{
    try {
        $conn = getConnection();
        $sql = $conn->prepare("DELETE FROM Personajes WHERE id=?");
        $sql->bindParam(1, $id);
        return $sql->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
    $conn = null;
}
