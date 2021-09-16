<?PHP
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
         <font size="2"> <center> <b>BROASTERIA CARLITOS</b>  </center></font>';
 

  echo '<center>   El mejor pollo de la zona </center> ';

  
   echo '<center> Suscursal  Av. Circunvalacion </center> ';
   echo '<center>   N&ordm; 1517 - Telefono : 4477129  </center> ';
 
   echo '<center>  COCHABAMBA</center> ';
 
 
  echo '<br>';
  echo'---------------------------------------------------------------';
  echo '<br>';
 
?>

<?PHP
require_once('codigo_control.class2.php');
		

//date_default_timezone_set("America/Caracas" ) ;
//$tiempo = getdate(time());
//$Fecha= date('d-m-Y H:m:s ');
//$Ip= $REMOTE_ADDR;

//echo "Fecha: ".$Fecha;

date_default_timezone_set("America/Caracas" ) ;
$tiempo = getdate(time());
$dia = $tiempo['wday'];
$dia_mes=$tiempo['mday'];
$mes = $tiempo['mon'];
$year = $tiempo['year'];
$hora= $tiempo['hours'];
$minutos = $tiempo['minutes'];
$segundos = $tiempo['seconds'];


switch ($dia){
case "1": $dia_nombre="Lunes"; break;
case "2": $dia_nombre="Martes"; break;
case "3": $dia_nombre="Miercoles"; break;
case "4": $dia_nombre="Jueves"; break;
case "5": $dia_nombre="Viernes"; break;
case "6": $dia_nombre="Sabado"; break;
case "0": $dia_nombre="Domingo"; break;
}
switch($mes){
case "1": $mes_nombre="Enero"; break;
case "2": $mes_nombre="Febrero"; break;
case "3": $mes_nombre="Marzo"; break;
case "4": $mes_nombre="Abril"; break;
case "5": $mes_nombre="Mayo"; break;
case "6": $mes_nombre="Junio"; break;
case "7": $mes_nombre="Julio"; break;
case "8": $mes_nombre="Agosto"; break;
case "9": $mes_nombre="Septiembre"; break;
case "10": $mes_nombre="Octubre"; break;
case "11": $mes_nombre="Noviembre"; break;
case "12": $mes_nombre="Diciembre"; break;
}








//$hora= $dia_nombre." ".$dia_mes."  ".$mes_nombre."  ".$year ."  Hora : " .$hora.": ".$minutos.":".$segundos ;
//echo 'Fecha : ';
//echo $hora;
//echo '<br>';
?> 

<?php

	$bd_host = "localhost"; 
	$bd_usuario = "root"; 
	$bd_password = ""; 
	$bd_base = "ribosomatic";
	
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	
	mysql_select_db($bd_base, $con); 
	
		
	//BUSCA EN LOS REGISTROS DE IHISTORIALES CUAL ES EL MAXIMO NUMERO O EL ULTIMO MAYOR
	//$max="select max(idpedido) as maxid from pedido2";

    $max="select max(idcliente) as maxid from ficha";
	$rs=mysql_query($max,$con);
		if(mysql_num_rows($rs)){
		$codexp=mysql_result($rs,0,"maxid"); //SE LE SUMA 1 PARA QUE SEA EL REGISTRO CORRELATIVO
		}else{
		$codexp=1;
		}//SINO EXISTE LE AGREGA 1 (EL PRIMERO) SOLO SE CUMPLE UNA SOLA VEZ
	echo '<b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	            FICHA </b> : ';
	echo '<font size="+2">' ;
	echo $codexp;
	 echo '</font>';
	echo '<br>';
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
    


   echo '<table cellpadding="0"  cellspacing="0" width="260">';
      
	   

	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$nitci=$fila['ci'];
		
		echo '<tr><td><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se&ntilde;or :</b>'.$fila['nombreCliente'].'</td></tr>';
		echo '<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nit/CI :</b>'.$fila['ci'].'</td></tr>';
		$nit=$fila['ci'];
		$efectivo=$fila['monto'];
		$efectivoT=$efectivo;
		
		
		
		
		
	}
	echo "</table>";
	?>

    <?PHP  
	    $fechaH=date("d-m-Y");
        $hora= " " .$hora.": ".$minutos.":".$segundos ;
		echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha  de Venta: </b>';
		echo $fechaH;
		$anioActual=date("Y");
		$mesActual=date("m");
		$diaActual=date("d");
		
		echo '&nbsp;&nbsp;&nbsp;';
		echo $hora;
		echo '<br>';
	?>
		
    <?PHP 
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
		
	}

			
			
			
			
			
			
			  
	
			
		/*	$anioActual=date("Y");
		$mesActual=date("m");
		$diaActual=date("d");*/
		
		
	 $fechaa=date("Ymd");
	 
	//$fechaa='20070719';

	/* echo 	$autorizacion; echo '<br>';
	 echo 	$factura; echo '<br>';
	 echo 	$nitci; echo '<br>';
	 echo 	$monto; echo '<br>';
     echo 	$llave; echo '<br>';
	 echo  $fechaa;
	 */
		//echo $fechaA;
		//'$fechaA',

			
			
	$CodigoControl = new CodigoControl($autorizacion,$factura,$nitci,$fechaa,$monto,$llave);
	
			
			
			echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Codigo de Control : </b>';
			echo $CodigoControl->generar().'<br/>';
			
			/*echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Codigo de Controllll : </b>';
			echo $activatecode;
			echo '-';
			echo $activatecode1;
			echo '-';
			echo $activatecode2;
			echo '-';
			echo $activatecode3;*/
					
		
		echo '<br>';
		
		
		
		
	
	?>



<?php
	$bd_host = "localhost"; 
	$bd_usuario = "root"; 
	$bd_password = ""; 
	$bd_base = "ribosomatic"; 
	
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	
	mysql_select_db($bd_base, $con); 
	
    $strConsulta = "SELECT idpedido,producto,tipo,cantidad ,precio , count(producto) as cantidadTotal,nombrecompleto FROM pedido group by nombrecompleto  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
    


   echo '<table cellpadding="0"  cellspacing="0" >';
      
	echo'--------------------------------------------------------------';   
	echo ' <br>';
	echo '<thead><tr><td width="40"></td><td width="120"><b>Producto</b></td><td width="80"><b>Tipo</b></td><td width="80"><b>Cant.</b></td><td><b>Precio</b></td></tr></thead>';
	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		echo '<td >'.'</td>';
        //ojooooooooooooooooooooo
		//$atendidoPor=$fila['atendidoPor'];


        echo '<td >'.$fila['producto'].'</td>';
		echo '<td>'.$fila['tipo'].'</td>';
		echo '<td>'.$fila['cantidadTotal'].'</td>';
		echo '<td>'.$fila['precio'].'</td></tr>';
		
		
	}
	echo "</table>";


    $strConsulta1 = "SELECT SUM( cantidad *	precio  ) as total  FROM pedido ";
	$pacientes1 = mysql_query($strConsulta1);
	$numfilas1 = mysql_num_rows($pacientes1);
	 echo '<table cellpadding="0"  cellspacing="0" width="260">';

	//echo '<thead><tr><td><font face="lucida console" size="1,5">Total:</font></td></tr></thead>';
	for ($i=0; $i<$numfilas1; $i++)
	{
		$fila1 = mysql_fetch_array($pacientes1);
		
		//echo '<td>'.$fila1['total'].'</td></br></br>';
		
		echo'--------------------------------------------------------------';
		echo ' <br>';
		echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total a Pagar: Bs.</b> ';
		$total1=$fila1["total"];
		echo $total1 ;
		echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> ';
		echo ' <br>';
	    echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Efectivo :Bs.</b> ';
		echo $efectivoT;
		echo '<b>&nbsp;&nbsp;&nbsp;</b> ';
		echo ' <br>';
		echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cambio : Bs.</b> ';
		
		$cambio= $efectivo-$total1;
		echo $cambio;
		echo ' <br>';
		
		
		}
		
	echo "</table>";
	?>
	
	
	<?PHP
// funcion de numero a palabras
//$num=111;
	$num=$total1;
//echo $num;
//echo 'hooola';
function num_letra($num, $fem = false, $dec = true) 
{ 
//if (strlen($num) > 14) die("El n?mero introducido es demasiado grande"); 
   $matuni[2]  = "dos"; 
   $matuni[3]  = "tres"; 
   $matuni[4]  = "cuatro"; 
   $matuni[5]  = "cinco"; 
   $matuni[6]  = "seis"; 
   $matuni[7]  = "siete"; 
   $matuni[8]  = "ocho"; 
   $matuni[9]  = "nueve"; 
   $matuni[10] = "diez"; 
   $matuni[11] = "once"; 
   $matuni[12] = "doce"; 
   $matuni[13] = "trece"; 
   $matuni[14] = "catorce"; 
   $matuni[15] = "quince"; 
   $matuni[16] = "dieciseis"; 
   $matuni[17] = "diecisiete"; 
   $matuni[18] = "dieciocho"; 
   $matuni[19] = "diecinueve"; 
   $matuni[20] = "veinte"; 
   $matunisub[2] = "dos"; 
   $matunisub[3] = "tres"; 
   $matunisub[4] = "cuatro"; 
   $matunisub[5] = "quin"; 
   $matunisub[6] = "seis"; 
   $matunisub[7] = "sete"; 
   $matunisub[8] = "ocho"; 
   $matunisub[9] = "nove"; 

   $matdec[2] = "veint"; 
   $matdec[3] = "treinta"; 
   $matdec[4] = "cuarenta"; 
   $matdec[5] = "cincuenta"; 
   $matdec[6] = "sesenta"; 
   $matdec[7] = "setenta"; 
   $matdec[8] = "ochenta"; 
   $matdec[9] = "noventa"; 
   $matsub[3]  = 'mill'; 
   $matsub[5]  = 'bill'; 
   $matsub[7]  = 'mill'; 
   $matsub[9]  = 'trill'; 
   $matsub[11] = 'mill'; 
   $matsub[13] = 'bill'; 
   $matsub[15] = 'mill'; 
   $matmil[4]  = 'millones'; 
   $matmil[6]  = 'billones'; 
   $matmil[7]  = 'de billones'; 
   $matmil[8]  = 'millones de billones'; 
   $matmil[10] = 'trillones'; 
   $matmil[11] = 'de trillones'; 
   $matmil[12] = 'millones de trillones'; 
   $matmil[13] = 'de trillones'; 
   $matmil[14] = 'billones de trillones'; 
   $matmil[15] = 'de billones de trillones'; 
   $matmil[16] = 'millones de billones de trillones'; 

   $num = trim((string)@$num); 
   if ($num[0] == '-') { 
      $neg = 'menos '; 
      $num = substr($num, 1); 
   }else 
      $neg = ''; 
   while ($num[0] == '0') $num = substr($num, 1); 
   if ($num[0] < '1' or $num[0] > 9) $num = '0' . $num; 
   $zeros = true; 
   $punt = false; 
   $ent = ''; 
   $fra = ''; 
   for ($c = 0; $c < strlen($num); $c++) { 
      $n = $num[$c]; 
      if (! (strpos(".,'''", $n) === false)) { 
         if ($punt) break; 
         else{ 
            $punt = true; 
            continue; 
         } 

      }elseif (! (strpos('0123456789', $n) === false)) { 
         if ($punt) { 
            if ($n != '0') $zeros = false; 
            $fra .= $n; 
         }else 

            $ent .= $n; 
      }else 

         break; 

   } 
   $ent = '     ' . $ent; 
   if ($dec and $fra and ! $zeros) { 
      $fin = ' coma'; 
      for ($n = 0; $n < strlen($fra); $n++) { 
         if (($s = $fra[$n]) == '0') 
            $fin .= ' cero'; 
         elseif ($s == '1') 
            $fin .= $fem ? ' una' : ' un'; 
         else 
            $fin .= ' ' . $matuni[$s]; 
      } 
   }else 
      $fin = ''; 
   if ((int)$ent === 0) return 'Cero ' . $fin; 
   $tex = ''; 
   $sub = 0; 
   $mils = 0; 
   $neutro = false; 
   while ( ($num = substr($ent, -3)) != '   ') { 
      $ent = substr($ent, 0, -3); 
      if (++$sub < 3 and $fem) { 
         $matuni[1] = 'una'; 
         $subcent = 'as'; 
      }else{ 
         $matuni[1] = $neutro ? 'un' : 'uno'; 
         $subcent = 'os'; 
      } 
      $t = ''; 
      $n2 = substr($num, 1); 
      if ($n2 == '00') { 
      }elseif ($n2 < 21) 
         $t = ' ' . $matuni[(int)$n2]; 
      elseif ($n2 < 30) { 
         $n3 = $num[2]; 
         if ($n3 != 0) $t = 'i' . $matuni[$n3]; 
         $n2 = $num[1]; 
         $t = ' ' . $matdec[$n2] . $t; 
      }else{ 
         $n3 = $num[2]; 
         if ($n3 != 0) $t = ' y ' . $matuni[$n3]; 
         $n2 = $num[1]; 
         $t = ' ' . $matdec[$n2] . $t; 
      } 
      $n = $num[0]; 
      if ($n == 1) { 
         $t = ' ciento' . $t; 
      }elseif ($n == 5){ 
         $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t; 
      }elseif ($n != 0){ 
         $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t; 
      } 
      if ($sub == 1) { 
      }elseif (! isset($matsub[$sub])) { 
         if ($num == 1) { 
            $t = ' mil'; 
         }elseif ($num > 1){ 
            $t .= ' mil'; 
         } 
      }elseif ($num == 1) { 
         $t .= ' ' . $matsub[$sub] . '?n'; 
      }elseif ($num > 1){ 
         $t .= ' ' . $matsub[$sub] . 'ones'; 
      }
      if ($num == '000') $mils ++; 
      elseif ($mils != 0) { 
         if (isset($matmil[$sub])) $t .= ' ' . $matmil[$sub]; 
         $mils = 0; 
      } 
      $neutro = true; 
      $tex = $t . $tex; 
   } 
   $tex = $neg . substr($tex, 1) . $fin; 
   return ucfirst($tex); 
}  
?>
<table><tr><td width="30"></td><td align="center">
Son <?php echo num_letra($num, false, true)?> <?php echo '0/100'; echo '&nbsp;'; echo'Bolivianos ';?>
</td></tr></table>
	
   <?PHP
   include("qr.php");

   ?>





<?PHP 
  

   echo'--------------------------------------------------------------';
   echo '<center> &nbsp;&nbsp; Gracias por su preferencia !! </center>';
   echo '<br>';echo '<br>';echo '<br>';
   echo 'Atendido por : ';
   echo '<b>'; echo $apellidos; echo ' ';  echo '</b>';
  // echo '<b>'; echo $apellidos; echo '</b>';echo '<br>';
?>	
	
	