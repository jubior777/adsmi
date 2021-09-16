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

if (isset($_POST['update_data_moneda'])) {
    $usuarioLogin = $_POST['usuarioLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $idMoneda = $_POST['idMoneda'];
    $moneda = $_POST['moneda'];

    if ($moneda == "Colombia") {
        $pais = "Colombia";
        $tipoMoneda = "$";
        $contexto = "Peso Colombiano";
    }

    if ($moneda == "EUA") {
        $pais = "Estados Unidos";
        $tipoMoneda = "$ USD";
        $contexto = "Dólar Estadounidense";
    }
    if ($moneda == "Bolivia") {
        $pais = "Bolivia";
        $tipoMoneda = "Bs.";
        $contexto = "Bolivianos";
    }
    if ($moneda == "Ecuador") {
        $pais = "Ecuador";
        $tipoMoneda = "$";
        $contexto = "Dólar Estadounidense";
    }
    if ($moneda == "Argentina") {
        $pais = "Argentina";
        $tipoMoneda = "$";
        $contexto = "Peso Argentino";
    }
    if ($moneda == "Peru") {
        $pais = "Peru";
        $tipoMoneda = "S/";
        $contexto = "Sol";
    }
    if ($moneda == "Brasil") {
        $pais = "Brasil";
        $tipoMoneda = "R$";
        $contexto = "Real Brasileño";
    }
    if ($moneda == "Chile") {
        $pais = "Chile";
        $tipoMoneda = "$";
        $contexto = "peso Chileno	";
    }
    if ($moneda == "Venezuela") {
        $pais = "Venezuela";
        $tipoMoneda = "Bs F";
        $contexto = "Bolívar Fuerte";
    }
    if ($moneda == "Mexico") {
        $pais = "Mexico";
        $tipoMoneda = "$";
        $contexto = "Peso Mexicano";
    }
    if ($moneda == "Paraguay") {
        $pais = "Paraguay";
        $tipoMoneda = "₲";
        $contexto = "Guaraní Paraguayo";
    }
    if ($moneda == "Uruguay") {
        $pais = "Uruguay";
        $tipoMoneda = "$";
        $contexto = "Peso Uruguayo";
    }


    $mensaje = "Se Actualizo  los datos de la Moneda !!!";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
    $updateDatosMoneda = $con->updateDataMoneda($idMoneda, $pais, $tipoMoneda, $contexto);

}

header("Location: Moneda.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");


?>
