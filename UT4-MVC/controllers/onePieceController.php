<?php

session_start();
if (!isset($_SESSION["conexion"])) {
    header("location: index.php");
}

    function listar()
    {
        require "./models/onePieceModel.php";
        $personajes = getListar();
        include "./views/onePieceView.php";
    }

    function mostrarPersonaje()
    {
        require "./models/onePieceModel.php";
        $id = $_GET["id"];
        $personaje = getPersonaje($id);
        include "./views/personajeView.php";
    }

    function crearPersonaje()
    {
        require "./models/onePieceModel.php";
        $action = htmlentities($_SERVER['PHP_SELF']);
        $personaje = [];
        $personaje["id"] = "";
        $personaje["Nombre"] = "";
        $personaje["FrutaDelDiablo"] = "";
        $personaje["Raza"] = "";
        $personaje["EdadAnime"] = "";
        $personaje["Altura"] = "";
        $personaje["FechaNacimiento"] = "";
        $personaje["Imagen"] = "";
        $error = "";

        $target_dir = "images/";

        $uploadOk = 1;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $error = true;

            $nombre = $_POST["nombre"];
            $nombre = strip_tags($nombre);
            $nombre = stripslashes($nombre);
            $nombre = htmlspecialchars($nombre);
            if (empty($nombre)) {
                $error = false;
            }

            $frutaDelDiablo = $_POST["frutaDelDiablo"];
            $frutaDelDiablo = strip_tags($frutaDelDiablo);
            $frutaDelDiablo = stripslashes($frutaDelDiablo);
            $frutaDelDiablo = htmlspecialchars($frutaDelDiablo);
            if (empty($frutaDelDiablo)) {
                $error = false;
            }

            $raza = $_POST["raza"];
            $raza = strip_tags($raza);
            $raza = stripslashes($raza);
            $raza = htmlspecialchars($raza);
            if (empty($raza)) {
                $error = false;
            }

            $edad = $_POST["edad"];
            $edad = strip_tags($edad);
            $edad = stripslashes($edad);
            $edad = htmlspecialchars($edad);
            if (empty($edad)) {
                $error = false;
            }

            $altura = $_POST["altura"];
            $altura = strip_tags($altura);
            $altura = stripslashes($altura);
            $altura = htmlspecialchars($altura);
            if (empty($altura)) {
                $error = false;
            }

            $fechaNacimiento = $_POST["fechaNacimiento"];
            $fechaNacimiento = strip_tags($fechaNacimiento);
            $fechaNacimiento = stripslashes($fechaNacimiento);
            $fechaNacimiento = htmlspecialchars($fechaNacimiento);
            if (empty($fechaNacimiento)) {
                $error = false;
            }

            $target_file = basename($_FILES["avatar"]["name"]);
            $imagen = getimagesize($_FILES["avatar"]["tmp_name"]);
            if ($imagen !== false) {
                echo "File is an image - " . $imagen["mime"] . ".";
                $new_file = $target_file;
                if (!move_uploaded_file($_FILES["avatar"]["tmp_name"], 'images/' . $new_file)) {
                    echo "ERROR IMAGE";
                }

                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            $personaje = createPersonaje($nombre, $frutaDelDiablo, $raza, $edad, $fechaNacimiento, $altura, $new_file);
            header("Location: index.php");
        }
        include "./views/crearEditarView.php";
    }

    function editarPersonaje()
    {
        require "./models/onePieceModel.php";
        $id = $_GET["id"];
        $action = htmlentities($_SERVER['PHP_SELF'] . "?id=$id");
        $personaje = getPersonaje($id);

        $imagen = $personaje["Imagen"];
        $error = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $nombre = strip_tags($nombre);
            $nombre = stripslashes($nombre);
            $nombre = htmlspecialchars($nombre);

            $frutaDelDiablo = $_POST["frutaDelDiablo"];
            $frutaDelDiablo = strip_tags($frutaDelDiablo);
            $frutaDelDiablo = stripslashes($frutaDelDiablo);
            $frutaDelDiablo = htmlspecialchars($frutaDelDiablo);

            $raza = $_POST["raza"];
            $raza = strip_tags($raza);
            $raza = stripslashes($raza);
            $raza = htmlspecialchars($raza);

            $edad = $_POST["edad"];
            $edad = strip_tags($edad);
            $edad = stripslashes($edad);
            $edad = htmlspecialchars($edad);

            $altura = $_POST["altura"];
            $altura = strip_tags($altura);
            $altura = stripslashes($altura);
            $altura = htmlspecialchars($altura);

            $fechaNacimiento = $_POST["fechaNacimiento"];
            $fechaNacimiento = strip_tags($fechaNacimiento);
            $fechaNacimiento = stripslashes($fechaNacimiento);
            $fechaNacimiento = htmlspecialchars($fechaNacimiento);

            if ($_FILES["avatar"]["size"] != 0) {
                $target_dir = "images/";
                $target_file = basename($_FILES["avatar"]["name"]);
                $timestamp = time();
                $new_file = $timestamp . $target_file;
                if (editPersonaje($id, $nombre, $frutaDelDiablo, $raza, $edad, $fechaNacimiento, $altura, $new_file)) {
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], 'images/' . $new_file);
                    header("Location: index.php");
                }
            } else {
                if (editPersonaje($id, $nombre, $frutaDelDiablo, $raza, $edad, $fechaNacimiento, $altura, $imagen)) {
                    header("Location: index.php");
                } else {
                    $error = "NO SE HA MODIFICADO NINGÚN CAMPO";
                }
            }
        }
        include "./views/crearEditarView.php";
    }

    function eliminarPersonaje()
    {
        require "./models/onePieceModel.php";
        $id = $_GET["id"];
        $personaje = deletePersonaje($id);
        $personajes = getListar();
        include "./views/onePieceView.php";
    }
?>