<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuarioLogin = $_POST['usuarioLogin'];
$passwordLogin = $_POST['passwordLogin'];

$con = new conexion();


if (isset($_GET['idConsolidar'])) {

    $idVenta = $_GET['idConsolidar'];
    $codigoControl = $_GET['codigoControl'];
    $usuarioLogin = $_GET['usuarioLogin'];
    $passwordLogin = $_GET['passwordLogin'];

    $updateDatosclienteventa = $con->updateDatosclienteventa($codigoControl);
    $updateDatosfacturaventa = $con->updateDatosfacturaventa($codigoControl);
    $updateDatosventa = $con->updateDatosventa($codigoControl);
    $updateDatosventatotal = $con->updateDatosventatotal($codigoControl);


    $mensaje = "Se Consolido la Venta  !!!";
    $alerta = "alert alert-success";
    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);

}


if (isset($_POST['insertarComentario'])) {
    $idVentas = $_POST['idVentas'];
    $comentario = $_POST['comentario'];


   $updateComentario = $con ->insertarComentarioFicha($idVentas, $comentario);

    $mensaje = "Se Inserto un Comentario !!!";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);

}

$searchUser = $con->getUser($usuarioLogin, $passwordLogin);
$allUsuarios = $con->getAllUserData();

foreach ($searchUser as $user) {
    $tipo = $user['tipo'];
    $id_usuario = $user['id_usu'];
    $nombres = $user['nombre'];
    $password = $user['password'];
    $foto = $user['foto'];
}


$menuMain = $con->getMenuMain();

header("Location: Consolidar.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");


?>
