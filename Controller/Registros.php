<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuarioLogin = $_POST['usuarioLogin'];
$passwordLogin = $_POST['passwordLogin'];

$con = new conexion();

$allUsuarios = $con->getAllUserData();
$menuMain = $con->getMenuMain();

if (isset($_POST['nuevo_usuario'])) {
    $usuario = $_POST['login'];
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];


    $mensaje = "Se Añadio un nuevo Usuario";
    $alerta = "alert alert-success";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);


    if ($_FILES['userfile']['name'] != "") {

        $ruta = "fotoproducto/";
        opendir($ruta);
        $imagenUsuario = $ruta . $_FILES['userfile']['name'];


        $nombre_archivo = ADDRESS . $_FILES['userfile']['name'];
        $tipo_archivo = $_FILES['userfile']['type'];
        $tamano_archivo = $_FILES['userfile']['size'];


        $nuevo_archivo = "fotoproducto/" . substr($tipo_archivo, 6, 4);


        if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 5000000))) {
            cuadro_error("La extensión o el tamaño de los archivos no es correcta, Se permiten archivos .gif .png o .jpg de 5 Mb máximo");

        } else {
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $nombre_archivo)) {
                rename($nombre_archivo, $nuevo_archivo);
                // se subio correctamente
            } else {
                cuadro_error("Ocurrió algún error al subir el archivo. No pudo guardarse");
            }
        }
    } else {
        $imagenUsuario = "fotoUsuario/user.png";
    }

    $registerNewUser = $con->getRegisterNewUser($nombre, $tipo, $usuario, $password, $imagenUsuario);
}

if (isset($_GET['idborrar'])) {

    $idUsuario = $_GET['idborrar'];
    $usuarioLogin = $_GET['usuarioLogin'];
    $passwordLogin = $_GET['passwordLogin'];


    $mensaje = "Se Elimino un usuario";
    $alerta = "alert alert-danger";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);

    $deleteUser = $con->deleteUsuario($idUsuario);
}

if (isset($_POST['update_usuario'])) {

    $idUsuarioData = $_POST['idUsuario'];
    $login = $_POST['login'];
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $imagen = $_POST['imagen'];

    $usuarioLogin = $_POST['usuarioLogin'];
    $passwordLogin = $_POST['passwordLogin'];


    $mensaje = "Se Edito los datos del usuario";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);


    if ($_FILES['userfileEdit']['name'] != "") {

        $ruta = "fotoproducto/";
        opendir($ruta);
        $imagenUsuario = $ruta . $_FILES['userfileEdit']['name'];


        $nombre_archivo = ADDRESS . $_FILES['userfileEdit']['name'];
        $tipo_archivo = $_FILES['userfileEdit']['type'];
        $tamano_archivo = $_FILES['userfileEdit']['size'];


        $nuevo_archivo = "fotoproducto/" . substr($tipo_archivo, 6, 4);

        if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 5000000))) {
            cuadro_error("La extensión o el tamaño de los archivos no es correcta, Se permiten archivos .gif o .jpg de 5 Mb máximo");

        } else {
            if (move_uploaded_file($_FILES['userfileEdit']['tmp_name'], $nombre_archivo)) {
                rename($nombre_archivo, $nuevo_archivo);
            } else {
                cuadro_error("Ocurrió algún error al subir el archivo. Intente otra vez");
            }
        }
    } else {
        $imagenUsuario = $imagen;
    }


    $updateUser = $con->updateUsuario($login, $tipo, $nombre, $password, $imagenUsuario, $idUsuarioData);

}

$urlController = URL_CONTROLLER;
header("Location: Usuario.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");


?>

