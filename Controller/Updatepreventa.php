<?php 
 require('../Model/Connexion.php');
 require('../Controller/Constans.php');
 

 if (!isset($_SESSION)) {
    session_start();
}

$idUsuario = $_GET['userId'];

$con = new conexion();

$onlyUserSession = $con->getOnlyUserData($idUsuario);

foreach ($onlyUserSession as $user) {
    $usuario = $user['login'];
    $password = $user['password'];
    $tipoUsuserio = $user['tipo'];
}
$urlViews = URL_VIEWS;

$idProducto = $_GET['idProducto'];
$imagen = $_GET['imagen'];
$precio = $_GET['precio'];
$precioVenta = $_GET['pventa'];
$tipoUser = $_GET['tipo'];
$tipoPedido = $_GET['tipoPedido'];
$idpreventa = $_GET['idpreventa'];
$nombreProducto = $_GET['producto'];
$cantidadUpdated = $_GET['cantidadUpdated'];
$nuevoPrecio = $_GET['nuevoPrecio'];

$getCantidadActual = $con->getCantidadProductoChoose($idProducto, $tipoPedido);

foreach ($getCantidadActual as $cantidadPedidoActual) {
    $cantidadActual = $cantidadPedidoActual['cantidadTotal'];
}

if ($cantidadUpdated > $cantidadActual) {
    $cantidadNuevaActualizada = $cantidadUpdated - $cantidadActual;
    for ($i=0; $i <$cantidadNuevaActualizada; $i++ ){
        $isertarCantidadActualizada = $con->insertarPreventaProducto($imagen, $nombreProducto, $precioVenta, $idProducto, $precioVenta, $idUsuario, $tipoPedido);
    }
}


if (($cantidadUpdated < $cantidadActual) and ($cantidadUpdated != 1)) {
    $cantidadNuevaActualizada = $cantidadActual - ($cantidadActual - $cantidadUpdated);
    $deleteCantidadActual = $con->deleteOnlyPreventa($idProducto,$tipoPedido);
    for ($i=0; $i <$cantidadNuevaActualizada; $i++ ){
        $isertarCantidadActualizada = $con->insertarPreventaProducto($imagen, $nombreProducto, $precioVenta, $idProducto, $precioVenta, $idUsuario, $tipoPedido);
    }
}


if ($cantidadUpdated == 1) {
    $deleteCantidadActual = $con->deleteOnlyPreventa($idProducto,$tipoPedido);
    for ($i=0; $i <$cantidadUpdated; $i++ ){
        $isertarCantidadActualizada = $con->insertarPreventaProducto($imagen, $nombreProducto, $precioVenta, $idProducto, $precioVenta, $idUsuario, $tipoPedido);
    }
}

header("Location: Ventas.php?usuario=$usuario&password=$password");


?>