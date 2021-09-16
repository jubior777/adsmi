<?PHP
	$bd_host = "localhost";
	$bd_usuario = "root";
	$bd_password = "";
	$bd_base = "ribosomatic";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

	mysql_select_db($bd_base, $con);
    $strConsulta1 = "SELECT SUM( cantidad *	precio  ) as total  FROM pedido ";
	$pacientes1 = mysql_query($strConsulta1);
	$numfilas1 = mysql_num_rows($pacientes1);
    for ($i=0; $i<$numfilas1; $i++)
	{
		$fila1 = mysql_fetch_array($pacientes1);
        $total1=$fila1["total"];


		}

	?>
<?php
	$bd_host = "localhost";
	$bd_usuario = "root";
	$bd_password = "";
	$bd_base = "ribosomatic";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

	mysql_select_db($bd_base, $con);

    $strConsulta = "SELECT  * from cliente  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);


	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$nitci=$fila['ci'];
        $nombreCli=$fila['nombreCliente'];
        $nit=$fila['ci'];
		$efectivo=$fila['monto'];
		$efectivoT=$efectivo;





	}

	?>

<?PHP
    require_once('codigo_control.class2.php');
	 $bd_host = "localhost";
	$bd_usuario = "root";
	$bd_password = "";
	$bd_base = "ribosomatic";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

	mysql_select_db($bd_base, $con);

    $strConsulta = "SELECT  * from codigocontrol  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);

	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$autorizacion=$fila['autorizacion'];
		$factura=$fila['factura'];
		$llave=$fila['llave'];
		$nit=$fila['nit'];
	}



    $bd_host = "localhost";
	$bd_usuario = "root";
	$bd_password = "";
	$bd_base = "ribosomatic";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

	mysql_select_db($bd_base, $con);

    $strConsulta = "SELECT  * from clienteTotal  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);




	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$monto=$fila['montoTotal'];
        $atendido=$fila['atendido'];

	}


	 $fechaa=date("Ymd");
	 
	 if(empty($nitci)){
		 
		 $nitci=0;
	 }
	 
	 
	$CodigoControl = new CodigoControl($autorizacion,$factura,$nitci,$fechaa,$monto,$llave);

      ?>









    <?php

	$bd_host = "localhost";
	$bd_usuario = "root";
	$bd_password = "";
	$bd_base = "ribosomatic";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);

	mysql_select_db($bd_base, $con);

    $max="select max(idlibro) as maxid from librov";
	$rs=mysql_query($max,$con);
		if(mysql_num_rows($rs)){
		$codexp=mysql_result($rs,0,"maxid"); //SE LE SUMA 1 PARA QUE SEA EL REGISTRO CORRELATIVO
		}

        else{
		$codexp=1;
		}

         //SINO EXISTE LE AGREGA 1 (EL PRIMERO) SOLO SE CUMPLE UNA SOLA VEZ
 /* echo '<b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	            FICHA </b> : ';
	echo '<font size="+2">' ;
	echo $codexp;
	 echo '</font>';
	echo '<br>';

      */
	?>
        <?PHP
     $fechaLibro=date("d/m/Y");
     $codigosControl=$CodigoControl->generar();

 /*   echo $fechaLibro; echo '<br>';
    echo  $nitci; echo '<br>';
    echo  $nombreCli; echo '<br>';
    echo  $autorizacion; echo '<br>';
    echo  $codigosControl;  echo '<br>';
    echo  $total1; echo '<br>';
*/

        $iva=$total1*(0.13);
         $fechaI=date("Y-m-d");

if(!empty($nombreCli)){
	
      //  if($nombreCli!=''){


    require('bd/conexion3.php');
   //actualizar Cantidad
$sqliA="INSERT INTO `ribosomatic`.`librov` (`idlibro`, `fecha`, `nit`, `nombre`, `factura`, `autorizacion`, `codigoC`, `total`, `ice`, `impoexe`, `neto`, `credifoFiscal`, `fechaI`)
VALUES (NULL, '$fechaLibro', '$nitci', '$nombreCli', '$codexp', '$autorizacion', '$codigosControl', '$total1', '0', '0', '$total1', '$iva','$fechaI');";


mysql_query($sqliA,$con3);

    }






             ?>




