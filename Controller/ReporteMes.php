<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuario = $_GET['usuarioLogin'];
$password = $_GET['passwordLogin'];
$año = $_GET['año'];
$mes = $_GET['mes'];

$con = new Conexion();


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
$menuMain = $con->getMenuMain();


$ventasMensuales = $con->getVentasMensuales();
$sumVentasMensuales = $con->getSumTotalVentasMensuales();
$totalVentasMensual = $con->getTotalVentasByMes($mes,$anio);

require('../Views/EstadisticaViewsMes.php');

?>