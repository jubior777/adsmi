<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$idProducto = $_POST['idProducto'];
$tipo = $_POST['tipo'];
$idUsuario = $_POST['idUser'];

$con = new conexion();

$onlyUserSession = $con->getOnlyUserData($idUsuario);

foreach ($onlyUserSession as $user) {
    $usuario = $user['login'];
    $password = $user['password'];
    $tipoUsuserio = $user['tipo'];
}
$urlViews = URL_VIEWS;

$editPreVentaData = $con->getDataProductoChoose($idProducto, $tipo);

foreach ($editPreVentaData as $preVenta) {
    $idPreventa = $preVenta['idPreventa'];
    $imagen = $preVenta['imagen'];
    $producto = $preVenta['producto'];
    $precio = $preVenta['precio'];
    $idProducto = $preVenta['idProducto'];
    $pventa = $preVenta['pventa'];
    $userId = $preVenta['idUser'];
    $tipoPedido = $preVenta['tipo'];
}

$getCantidad = $con->getCantidadProductoChoose($idProducto, $tipo);

foreach ($getCantidad as $getCantidadTotal) {
    $cantidadActual = $getCantidadTotal['cantidadTotal'];
}


require('../Views/EditPreVentaForm.php');
?>
