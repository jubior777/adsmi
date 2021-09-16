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

if (isset($_POST['update_data_factura'])) {
    $usuarioLogin = $_POST['usuarioLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $iddatos = $_POST['iddatos'];
    $propietario = $_POST['propietario'];
    $razon = $_POST['razon'];
    $direccion = $_POST['direccion'];
    $nro = $_POST['nro'];
    $telefono = $_POST['telefono'];

    $mensaje = "Se Actualizo  los datos de la factura !!!";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
    $updateDatosFactura = $con->updateDataFactura($propietario, $razon, $direccion, $nro, $telefono);

}
$urlController = URL_CONTROLLER;
header("Location: DatosFactura.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");


?>
