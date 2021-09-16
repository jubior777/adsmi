
<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new conexion();


$searchUser = $con->getUser($usuario, $password);
$allUsuarios = $con->getAllUserData();

foreach ($searchUser as $user) {
    $tipo = $user['tipo'];
    $id_usuario = $user['id_usu'];
    $nombres = $user['nombre'];
    $password = $user['password'];
    $foto = $user['foto'];
}

$tipoDeAlerta = $con->getMensajeAlerta();
foreach ($tipoDeAlerta as $tipoAlerta) {
    $alerta = $tipoAlerta['tipoAlerta'];
    $mensaje = $tipoAlerta['mensaje'];
}

if (!isset($_GET['estado'])) {
    $mensaje = "";
    $alerta = "";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
}


$urlViews = URL_VIEWS;
$urlController = URL_CONTROLLER;
$userLogueado = $nombres;
$imageUser = $foto;


$ventasMensuales = $con->getVentasMensuales();
$sumVentasMensuales = $con->getSumTotalVentasMensuales();
$totalVentasMensual = $con->getTotalVentasMensual();
$menuMain = $con->getMenuMain();


require("../Views/ReporteGraficos.php");
?>