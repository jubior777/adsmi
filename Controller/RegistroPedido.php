<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuarioLogin = $_POST['usuarioLogin'];
$passwordLogin = $_POST['passwordLogin'];

$con = new conexion();

if (isset($_POST['nuevo_Pedido'])) {
    $proveedor = $_POST['proveedor'];
    $descripcion = $_POST['descripcion'];
    $totalEfectivo = $_POST['total'];
    $fechaRegistro = $_POST['fechaRegistro'];

    $newPedido = $con->registerNewPedido($descripcion, $totalEfectivo, $proveedor, $usuarioLogin, $fechaRegistro);


    $mensaje = "Se registro un nuevo Pedido  !!!";
    $alerta = "alert alert-success";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);

}


if (isset($_GET['idborrar'])) {

    $idPedido = $_GET['idborrar'];
    $usuarioLogin = $_GET['usuarioLogin'];
    $passwordLogin = $_GET['passwordLogin'];


    $deletePedido = $con->deletePedido($idPedido);

    $mensaje = "Se elimino un Pedido  !!!";
    $alerta = "alert alert-danger";
    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);

}


if (isset($_POST['update'])) {
    $idPedido = $_POST['idPedido'];
    $proveedor = $_POST['proveedor'];
    $descripcion = $_POST['descripcion'];
    $totalEfectivo = $_POST['total'];
    $fechaRegistro = $_POST['fechaRegistro'];

$updatePedido = $con ->updatePedido($descripcion, $totalEfectivo, $proveedor, $usuarioLogin, $fechaRegistro, $idPedido);



    $mensaje = "Se Actualizo  los datos del pedido  !!!";
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
$urlController = URL_CONTROLLER;

$menuMain = $con->getMenuMain();

header("Location: Pedido.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");


?>
