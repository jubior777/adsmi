<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$idProducto = $_GET['idProducto'];
$tipo = $_GET['tipo'];
$idUsuario = $_GET['idUser'];

$con = new conexion();

$onlyUserSession = $con->getOnlyUserData($idUsuario);

foreach ($onlyUserSession as $user) {
    $usuario = $user['login'];
    $password = $user['password'];
}

$deleteOnlyPreventaProducto = $con->deleteOnlyPreventa($idProducto,$tipo);

$urlViews = URL_VIEWS;
$urlController = URL_CONTROLLER;



require('../Views/RefreshPedido.php');
?>
