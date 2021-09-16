<?php
require('../Model/Connexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuario = $_GET['usuarioLogin'];
$password = $_GET['passwordLogin'];
$con = new conexion();


if (isset($_GET['reporte_dia'])) {
    $fechaVentas = $_GET['fechaVentas'];
    $fechaVentasInicial = $fechaVentas . ' ' . '00:01:00';

    date_default_timezone_set("America/Bogota");
    $tiempo = getdate(time());
    $fecha = date_create($fechaVentas);
    date_add($fecha, date_interval_create_from_date_string('1 days'));
    $fechaVentasU = date_format($fecha, 'Y-m-d');

    $fechaVentasFinal = $fechaVentasU . ' ' . '23:59:00';

    $ventasByDia = $con->getVentasDia($fechaVentasInicial, $fechaVentasFinal);
    $ventasTotalByDia = $con->getVentasTotalesDia($fechaVentasInicial, $fechaVentasFinal);


    require('../Views/ReporteVentasPorDia.php');
}


if (isset($_GET['rango_fecha'])) {

    $fechaVentas = $_GET['fechaInicialVentas'];
    $fechaVentasInicial = $fechaVentas . ' ' . '00:01:00';

    $fechaFinalVentas = $_GET['fechaFinalVentas'];

    date_default_timezone_set("America/Bogota");
    $tiempo = getdate(time());
    $fecha = date_create($fechaFinalVentas);
    date_add($fecha, date_interval_create_from_date_string('1 days'));
    $fechaVentasU = date_format($fecha, 'Y-m-d');

    $fechaVentasFinal = $fechaVentasU . ' ' . '23:59:00';

    $ventasByDia = $con->getVentasDia($fechaVentasInicial, $fechaVentasFinal);
    $ventasTotalByDia = $con->getVentasTotalesDia($fechaVentasInicial, $fechaVentasFinal);


    require('../Views/ReporteVentasPorDia.php');

}


if (isset($_GET['reporte_producto'])) {

    $fechaVentas = $_GET['fechaInicialVentas'];
    $fechaVentasInicial = $fechaVentas . ' ' . '00:01:00';

    $fechaFinalVentas = $_GET['fechaFinalVentas'];

    date_default_timezone_set("America/Bogota");
    $tiempo = getdate(time());
    $fecha = date_create($fechaFinalVentas);
    date_add($fecha, date_interval_create_from_date_string('1 days'));
    $fechaVentasU = date_format($fecha, 'Y-m-d');

    $fechaVentasFinal = $fechaVentasU . ' ' . '23:59:00';


    $ventasProductoByDia = $con->getVentasProductoByDia($fechaVentasInicial, $fechaVentasFinal);
    $ventasTotalProductoByDia = $con->getVentasProductoTotalesDia($fechaVentasInicial, $fechaVentasFinal);

    require('../Views/ReporteProductosVentasPorDia.php');
}


if (isset($_GET['reporte_mes'])) {

     $año = $_GET['año'];
     $mes = $_GET['mes'];

    $ventasMensuales = $con->getVentasMensuales();
    $sumVentasByMes = $con->getSumaTotalVentasByMes($mes,$anio);
    $totalVentasMensual = $con->getTotalVentasByMes($mes,$anio);

    require('../Views/ReporteVentasPorMes.php');
}

if (isset($_GET['utilidad'])) {

    $fechaInicial = $_GET['fechaInicialVentas'];
    $fechaInicialVentas =  $fechaInicial.' '. '06:00:00';
    $fechaFinal = $_GET['fechaFinalVentas'];

    date_default_timezone_set("America/Bogota" ) ;
    $tiempo = getdate(time());
    $fecha = date_create($fechaFinal);
    date_add($fecha, date_interval_create_from_date_string('1 days'));
    $fechaVentasU = date_format($fecha, 'Y-m-d');

    $fechaFinalVentas = $fechaVentasU.' '. '04:00:00';

    $gastosEmpresa = $con->getGatosDeLaEmpresa($fechaInicialVentas,$fechaFinalVentas);
    $gastosTotales = $con->getTotalGatosDeLaEmpresa($fechaInicialVentas,$fechaFinalVentas);
    $entradaTotal = $con->getEntradasDeLaEmpresa($fechaInicialVentas,$fechaFinalVentas);
    $utilidad = $con->getUtilidadDeLaEmpresa($fechaInicialVentas,$fechaFinalVentas);

    foreach ($utilidad as $utilidadGatos) {
        $totalEntrada = $utilidadGatos['utilidad'];
    }


    $ventasTotalByDia = $con->getVentasTotalesDia($fechaInicialVentas, $fechaFinalVentas);
    foreach ($ventasTotalByDia as $totalVentas) {
        $totalVendido = $totalVentas['totalVentas'];
    }

    $utilidadNetaDeLaEmpresa=$totalEntrada + $totalVendido;


    require('../Views/ReporteUtilidad.php');

}


if (isset($_GET['gastos'])) {


    $fechaInicial = $_GET['fechaInicialVentas'];
    $fechaInicialVentas =  $fechaInicial.' '. '06:00:00';
    $fechaFinal = $_GET['fechaFinalVentas'];

    date_default_timezone_set("America/Bogota" ) ;
    $tiempo = getdate(time());
    $fecha = date_create($fechaFinal);
    date_add($fecha, date_interval_create_from_date_string('1 days'));
    $fechaVentasU = date_format($fecha, 'Y-m-d');

    $fechaFinalVentas = $fechaVentasU.' '. '04:00:00';

    $gastosEmpresa = $con->getGatosDeLaEmpresa($fechaInicialVentas,$fechaFinalVentas);
    $gastosTotales = $con->getTotalGatosDeLaEmpresa($fechaInicialVentas,$fechaFinalVentas);
    $entradaTotal = $con->getEntradasDeLaEmpresa($fechaInicialVentas,$fechaFinalVentas);

    require('../Views/ReporteGastosDeLaEmpresa.php');

}


if (isset($_GET['reporte_anual'])) {

    $año = $_GET['año'];

    $ventasMensuales = $con->getVentasMensuales();
    $sumVentasByMes = $con->getTotalVentasByYear($anio);
    $totalVentasMensual = $con->getTotalVentasByAnio($anio);

    require('../Views/ReporteVentasPorAnio.php');

}


if (isset($_GET['reporte_6meses'])) {


    $ventasMensuales = $con->getVentasMensuales();
    $VentasByMes = $con->getTotalVentas6Meses();
    $totalVentasMensual = $con->getGrandTotalVentas6Meses();

    require('../Views/ReporteVentasPor6Meses.php');

}


?>