<table>
          <tr>
		     <td>
<?PHP

	include("Connexion.php");

    $strConsulta = "SELECT  * from datos  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);

  //  iddatos 	propietario 	razon 	direccion 	nro 	telefono

   for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$propietarioA=$fila['propietario'];
        $razonA=$fila['razon'];
        $direccionA=$fila['direccion'];
        $nroA=$fila['nro'];
        $telefonoA=$fila['telefono'];
    }


echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
         <font size="2"> <center> <b>'.$razonA.'</b>  </center></font>';


  echo '<center>De: '.$propietarioA.'</center> ';

  
   echo '<center>Casa Matriz: '.$direccionA.'</center> ';
   echo '<center>   N&ordm; '.$nroA.' - Telefono : '.$telefonoA.'  </center> ';
 
   echo '<center>  BOGOTA DC</center> ';

               echo '<center>  FACTURA ORIGINAL</center> ';

  echo'------------------------------------------------------------------------------';
  echo '<br>';

 


  //	include("Connexion.php");

    $strConsulta = "SELECT  * from codigocontrol  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
   for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$nitNegocioA=$fila['nit'];
        $autorizacionA=$fila['autorizacion'];
        $facturaA=$fila['factura'];
        $llaveA=$fila['llave'];
        $fechaLA=$fila['fechaL'];
    }

   $strConsulta = "SELECT  * from librov  order by idlibro DESC LIMIT 1  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
   for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$facturalv=$fila['factura'];

    }
       $facturaFinal=$facturalv+1;
 ?>

<table>
     <tr><td width="25"></td><td><b>NIT : </b></td><td><?PHP echo $nitNegocioA;?></td> </tr>
     <tr><td width="25"></td><td><b>N&ordm; FACTURA : </b></td><td><?PHP echo $facturaFinal;?></td> </tr>
     <tr><td width="25"></td><td><b>N&ordm; AUTORIZACION : </b></td><td><?PHP echo $autorizacionA;?></td> </tr>
     <tr><td width="25"></td><td colspan="2" align="center"> Otros servicios de comidas</td> </tr>
</table>
     <?PHP

      echo'------------------------------------------------------------------------------';
  echo '<br>';
     ?>


<?PHP
require_once('codigo_control.class2.php');


//date_default_timezone_set("America/Bogota" ) ;
//$tiempo = getdate(time());
//$Fecha= date('d-m-Y H:m:s ');
//$Ip= $REMOTE_ADDR;

//echo "Fecha: ".$Fecha;

date_default_timezone_set("America/Bogota" ) ;
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


?> 







    <?PHP
	    $fechaH=date("d/m/Y");
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



<?php
   include("Connexion.php");
	
    $strConsulta = "SELECT  * from cliente  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
    


   echo '<table cellpadding="0"  cellspacing="0" width="260">';
      
	   

	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$nitci=$fila['cc'];

        echo '<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nit/CC :</b>'.$fila['cc'].'</td></tr>';
        echo '<tr><td><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se&ntilde;or(es):</b>'.$fila['nombreCliente'].'</td></tr>';
		$nit=$fila['cc'];
		$efectivo=$fila['monto'];
		$efectivoT=$efectivo;
		
		
		
		
		
	}
	echo "</table>";
	?>


		
    <?PHP 
  // include("Connexion.php");
	
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
         $fechaL=$fila['fechaL'];
	}

			
			
 //		include("Connexion.php");
	
    $strConsulta = "SELECT  * from clienteTotal  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
    

   

	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$monto=$fila['montoTotal'];
        $atendido=$fila['atendido'];

	}

			
			
			
			
			
			
			  
	
			
		/*	$anioActual=date("Y");
		$mesActual=date("m");
		$diaActual=date("d");*/
		
		
	 $fechaa=date("Ymd");
	 
	//$fechaa='20210619';

	/* echo 	$autorizacion; echo '<br>';
	 echo 	$factura; echo '<br>';
	 echo 	$nitcc; echo '<br>';
	 echo 	$monto; echo '<br>';
     echo 	$llave; echo '<br>';
	 echo  $fechaa;
	 */
		//echo $fechaA;
		//'$fechaA',


			
	$CodigoControl = new CodigoControl($autorizacion,$factura,$nitcc,$fechaa,$monto,$llave);
	
      ?>




<?php
	//include("Connexion.php");
	
    $strConsulta = "SELECT idpedido,producto,tipo,cantidad ,precio , count(producto) as cantidadTotal,nombrecompleto FROM pedido group by nombrecompleto  ";
    $pacientes = mysql_query($strConsulta);
    $numfilas = mysql_num_rows($pacientes);
    


   echo '<table cellpadding="0"  cellspacing="0" >';
      
  echo'------------------------------------------------------------------------------';
	echo ' <br>';
	echo '<thead><tr><td width="40"></td><td width="40"><b>Cant.</b></td><td width="150"><b>Descripcion</b></td><td width="80"><b>Precio</b></td><td><b>Total</b></td></tr></thead>';
	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		echo '<td >'.'</td>';
        //ojooooooooooooooooooooo
		//$atendidoPor=$fila['atendidoPor'];
       	echo '<td>'.$fila['cantidadTotal'].'</td>';
        echo '<td >'.$fila['producto'].'</td>';
        echo '<td>'.$fila['precio'].'</td>';
        echo '<td>'.$fila['precio']*$fila['cantidadTotal'].'</td>';
        // es para la mesa o llevar ojo desabilitado
        // echo '<td>'.$fila['tipo'].'</td>';

       echo ' </tr>';

		
	}
	echo "</table>";
  	?>
  	<?PHP
    $strConsulta1 = "SELECT SUM( cantidad *	precio  ) as total  FROM pedido ";
	$pacientes1 = mysql_query($strConsulta1);
	$numfilas1 = mysql_num_rows($pacientes1);
	 echo '<table cellpadding="0"  cellspacing="0" width="260">';

  for ($i=0; $i<$numfilas1; $i++)
	{
		$fila1 = mysql_fetch_array($pacientes1);

		//echo '<td>'.$fila1['total'].'</td></br></br>';

	 echo'------------------------------------------------------------------------------';
		echo ' <br>';
		echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total a Pagar: $.</b> ';
		$total1=$fila1["total"];
		echo $total1 ;
		echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> ';
		echo ' <br>';
	    echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Efectivo :$.</b> ';
		echo $efectivoT;
		echo '<b>&nbsp;&nbsp;&nbsp;</b> ';
		echo ' <br>';
		echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cambio : $.</b> ';

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
<b>Son </b><?php echo num_letra($num, false, true)?> <?php echo '0/100'; echo '&nbsp;'; echo'Pesos Colombiano ';?>
</td></tr></table>


<?PHP
			echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Codigo de Control : </b>';
			echo $CodigoControl->generar().'<br/>';

   $partes = explode("-",$fechaL);

   $anio=$partes[0];
   $mes=$partes[1];
   $dia=$partes[2];
   $mesRegistro=$dia.'/'.$mes.'/'.$anio;

  	echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha Limite de Emision : </b>';
    echo $mesRegistro ;

?>



    <table><tr><td width="100"></td><td align="center">
	  <?PHP
   include("qr.php");

   ?>
   </td></tr></table>

   <?php

	/*$bd_host = "localhost";
	$bd_usuario = "jorgev";
	$bd_password = "jorgev";
	$bd_base = "jorgev";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
    mysql_select_db($bd_base, $con);
     */

   //  include("Connexion.php");





    //$max="select max(idcliente) as maxid from ficha";
   // $max="select count(*) as maxid from ficha";
$max="select (count(*)+1) as maxid from ventasdia";

    $rs=mysql_query($max,$con);
		if(mysql_num_rows($rs)){
		$codexp=mysql_result($rs,0,"maxid"); //SE LE SUMA 1 PARA QUE SEA EL REGISTRO CORRELATIVO
		}else{
		$codexp=1;
		}










        //SINO EXISTE LE AGREGA 1 (EL PRIMERO) SOLO SE CUMPLE UNA SOLA VEZ
   /*	echo '<b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	            FICHA </b> : ';
	echo '<font size="+2">' ;
	echo $codexp;
	 echo '</font>';
	echo '<br>';  */



    echo'------------------------------------------------------------------------------';
	 echo '<center> " Esta factura contribuye al desarrollo del Pais el uso   </center>';
     echo '<center> ilicito de está sera  sancionado de acuerdo a ley "</center>';
   echo'------------------------------------------------------------------------------';


   echo '<br>';
   echo 'Atendido por : ';
   echo '<b>'; echo $atendido; echo ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; echo '</b>'; echo ' FICHA NRO : '; echo $codexp;
  // echo '<b>'; echo $apellidos; echo '</b>';echo '<br>';
?>

  	 </td>
		  </tr>
  </table>