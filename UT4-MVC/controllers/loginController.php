<?php
function login()
{
    require "./models/loginModel.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreUsuario = $_POST["nombreUsuario"];
        $nombreUsuario = strip_tags($nombreUsuario);
        $nombreUsuario = stripslashes($nombreUsuario);
        $nombreUsuario = htmlspecialchars($nombreUsuario);

        $contrasenia = $_POST["contrasenia"];
        $contrasenia = strip_tags($contrasenia);
        $contrasenia = stripslashes($contrasenia);
        $contrasenia = htmlspecialchars($contrasenia);

        $usuario = comprobar($nombreUsuario);
        
        if ($usuario) {
            $retorno = password_verify($contrasenia, $usuario["Contra"]);
            if ($retorno) {
                session_start();
                $_SESSION["conexion"] = "si";
                header("location: index.php?controller=onePiece&action=listar");
            } else {
                session_start();
                $_SESSION["conexion"] = "no";
                header("location: index.php");

            }
        } else {
            echo "El usuario es incorrecto";
        }
    }

    include "./views/loginView.php";
}

function cerrarSesion() {
    session_start();
    session_destroy();
    header("location: index.php");
}
?>