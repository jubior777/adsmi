<?php
//set it to writable location, a place for temp generated PNG files
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

//html PNG location prefix
$PNG_WEB_DIR = 'temp/';

include "phpqrcode/qrlib.php";

//ofcourse we need rights to create temp dir
if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);

$filename = $PNG_TEMP_DIR.'test.png';

$matrixPointSize = 2;
$errorCorrectionLevel = 'L';
   require_once('codigo_control.class2.php');

	include("coneccion.php");

    $strConsulta = "SELECT  * from codigocontrol  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
   for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$nitNegocio=$fila['nit'];
        $autorizacion1=$fila['autorizacion'];
        $factura1=$fila['factura'];
         $llave1=$fila['llave'];
          $fechaL=$fila['fechaL'];
    }



     $strConsulta = "Select * from clientetotal order by idcliente DESC LIMIT 1    ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
   // idcliente 	nombreCliente 	ci 	montoTotal 	fecha 	atendido

   for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$nitci1=$fila['ci'];
        $montoTotal=$fila['montoTotal'];
        $nombreCliente=$fila['nombreCliente'];

       // $fecha=$fila['fecha'];
    }

      $fecha1=date("d/m/Y");
        $fechaa=date("Ymd");


$nitNegocio=$nitNegocio;
$autorizacion=$autorizacion1;
$factura=$factura1;

$empresa='broasteria carlitos';

 $partes = explode("-",$fechaL);

   $anio=$partes[0];
   $mes=$partes[1];
   $dia=$partes[2];
   $mesRegistro=$dia.'/'.$mes.'/'.$anio;


$monto=$montoTotal;
$cliente=$nombreCliente;
$nitci=$nitci1;
 $llave =$llave1;

$CodigoControl = new CodigoControl($autorizacion,$factura,$nitci,$fechaa,$monto,$llave);
$codigosControl=$CodigoControl->generar();
//echo $codigosControl;



$filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
QRcode::png('|(nit-de-negocio)|'.$nitNegocio.'|(factura)|'.$facturaFinal.'|(autorizacion)|'.$autorizacion.'|(nombre-de-negocio)|'.$empresa.'|(fecha-limite-emision)|'.$mesRegistro.'|monto|'.$monto.'|'.$monto.'|(codigo-Control)|'.$codigosControl.'|(nombre-de-cliente)|'.$cliente.'|(ci)|'.$nitci.'|0|0.00||0.00|', $filename, $errorCorrectionLevel, $matrixPointSize, 2);


/*
|(nit-de-negocio)|(nombre-de-negocio)|
12100|              125214|
(fecha-limite-emision)|100
|D3-CB-32-E2|
20/01/2015|0|0|64444685|(nombre-de-cliente)| // www.iris-artsys.tk .Iver.I.S. //|

No.Autorizacion: << 1 >>
No.Factura: << 2 >>
N.I.T.: << 3 >>
Fecha: << 20150120 >>
Monto: << 4 >>
Llave: << 5 >>
Cod.Control:
6D-89-38-D9
*/

echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';
?>