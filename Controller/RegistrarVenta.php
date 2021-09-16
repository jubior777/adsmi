<?php
require('../Model/Connexion.php');
require('Constans.php');
require_once('Codigo_control.class.php');
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['RegistarVenta'])) {
    $con = new conexion();

    $usuario = $_GET['usuario'];
    $password = $_GET['password'];
    $cc = $_GET['cc'];
    $totalAPagar = $_GET['ingreso1'];
    $efectivo = $_GET['ingreso2'];
    $cambio = $_GET['resultado'];
    $fechaVenta = date("Y-m-d H:");
    $estado = "NoConsolidado";
    $comentario = "";
    $fechaCodigoControl = date("Ymd");

    $searchClient = $con->getClienteDatos($ci);

    foreach ($searchClient as $cliente) {
        $nombreClienteDato = $cliente['apellido'];
        $idClientei = $cliente['idcliente'];
    }

    $searchUser = $con->getUser($usuario, $password);

    foreach ($searchUser as $user) {
        $tipo = $user['tipo'];
        $id_usuario = $user['id_usu'];
        $nombres = $user['nombre'];
        $password = $user['password'];
        $login =$user['login'];
    }
    $urlViews = URL_VIEWS;
    $urlController = URL_CONTROLLER;
    $userLogueado = $nombres;


    $datosFactura = $con->getDatosFactura();
    foreach ($datosFactura as $facturaPropieario) {
        $propietario = $facturaPropieario['propietario'];
        $razon = $facturaPropieario['razonSocial'];
        $direccion = $facturaPropieario['direccion'];
        $nro = $facturaPropieario['nro'];
        $telefono = $facturaPropieario['telefono'];
    }


    $dataMoneda = $con->getMoneda();

    while ($dataMonedaValues = mysqli_fetch_array($dataMoneda)) {
        $contextMoneda = $dataMonedaValues['contexto'];
        $tipoMoneda = $dataMonedaValues['tipoMoneda'];
    }

    date_default_timezone_set("America/Bogota" ) ;
    $dateInicial= date('Y-m-d');
    $dateFinal= date('Y-m-d');
    $getNumeroFicha = $con-> getNumFicha($dateInicial,$dateFinal);
    foreach ( $getNumeroFicha as $numFicha){
        $ficha = $numFicha['numficha'];
    }

    $menuMain = $con->getMenuMain();


    $datosDosificacion = $con->getDatosDosificacion();
    foreach ($datosDosificacion as $dosificacion) {
        $autorizacion = $dosificacion['autorizacion'];
        $factura = $dosificacion['factura'];
        $llave = $dosificacion['llave'];
        $nit = $dosificacion['nit'];
        $fechaLimite = $dosificacion['fechaL'];
    }


    $obtenerDatosCliente = $con->getDataCliente();
    foreach ($obtenerDatosCliente as $datosCliente) {
        $nombreCliente = $datosCliente['nombre'];
        $cc = $datosCliente['cc'];
        $fecha = $datosCliente['fecha'];
        $totalApagar = $datosCliente['totalApagar'];
        $efectivo = $datosCliente['efectivo'];
        $cambio = $datosCliente['cambio'];
    }

    $getDatosFecha = explode("-", $fechaLimite);
    $fechaLimiteAnio = $getDatosFecha[0];
    $fechaLimiteMes = $getDatosFecha[1];
    $fechaLimiteDia = $getDatosFecha[2];

    $fechaLimiteEmision = $fechaLimiteDia . ' / ' . $fechaLimiteMes . ' / ' . $fechaLimiteAnio;


    $getCodigoControl = new CodigoControl($autorizacion, $factura, $cc, $fechaCodigoControl, $totalApagar, $llave);
    $codigoControl = $getCodigoControl->generar();


    $registrarVentaTotal = $con->registrarVenta($nombreClienteDato, $cc, $totalAPagar, $efectivo, $cambio, $idClientei, $codigoControl, $fechaVenta);

    $getDataClienteVenta = $con->getDatosVenta();

    foreach ($getDataClienteVenta as $dataVenta) {
        $idVentas = $dataVenta['idVentas'];
        $nombreCliente = $dataVenta['nombre'];
        $cc = $dataVenta['cc'];
        $fecha = $dataVenta['fecha'];
        $totalApagar = $dataVenta['totalApagar'];
        $efectivo = $dataVenta['efectivo'];
        $cambio = $dataVenta['cambio'];
        $codigoControl = $dataVenta['codigoControl'];
    }


    $pedidoTotalPreventa = $con->getPedidoTotalForFactura();
    $pedido = mysqli_num_rows($pedidoTotalPreventa);

    for ($i = 0; $i < $pedido; $i++) {
        $detallePedido = mysqli_fetch_array($pedidoTotalPreventa);

        $descripcion = $detallePedido['producto'];
        $precio = $detallePedido['precio'];
        $cantidad = $detallePedido['cantidad'];
        $total = $detallePedido['precio'] * $detallePedido['cantidad'];
        $tipo = $detallePedido['tipo'];

        $registrarPreventaTotalFinal = $con->registrarDatosVenta($cantidad, $descripcion, $precio, $total, $tipo, $fechaVenta, $codigoControl, $idVentas, $estado);
    }

    $registrarDatosVentaTotal = $con->registrarDatosVentaTotal($nombreClienteDato, $cantidad, $precio, $total, $codigoControl, $fechaVenta, $estado,$comentario);

    $registrarClienteDatosFinal = $con->registrarDatosClienteVenta($fechaVenta, $cc, $nombreClienteDato, $codigoControl, $idVentas, $estado);

    $registrarFacturaDatosFinal = $con->registrarDatosFacturaVenta($nit, $factura, $autorizacion, $codigoControl, $idVentas, $estado);

    /// Clean for new client

    $cleanDataCliente = $con->cleanClientData();
    $cleanDataPreventa = $con->cleanRegistroPreventa();

 header("Location: Ventas.php?usuario=$login&password=$password");

}

?>
