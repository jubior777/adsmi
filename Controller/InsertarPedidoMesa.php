<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$idProducto = $_GET['idproducto'];
$idUsuario = $_GET['iduser'];

$con = new conexion();

$onlyUserSession = $con->getOnlyUserData($idUsuario);

foreach ($onlyUserSession as $user) {
    $usuario = $user['login'];
    $password = $user['password'];
}

$productElegido = $con->getProductoElegido($idProducto);

foreach ($productElegido as $product) {
    $idProducto = $product['idproducto'];
    $imagen = $product['imagen'];
    $codigo = $product['codigo'];
    $nombreProducto = $product['nombreProducto'];
    $cantidad = $product['cantidad'];
    $fechaRegistro = date('Y-m-d H:i:s');
    $precioVenta = $product['precioVenta'];
    $tipo = $product['tipo'];
}
$tipoPedido = 'Mesa';
$urlViews = URL_VIEWS;
$urlController = URL_CONTROLLER;
$regiterPreventa = $con->insertarPreventaProducto($imagen, $nombreProducto, $precioVenta, $idProducto, $precioVenta, $idUsuario, $tipoPedido);

require('../Views/RefreshPedido.php');
?>
