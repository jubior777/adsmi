<?PHP 
/****************** TOTAL VENTAS *******************/


   
//Proceso de conexión con la base de datos
         $conex = mysql_connect("localhost", "boliviae_digital", "teodora6444685")
		or die("No se pudo realizar la conexion");
	 mysql_select_db("boliviae_digitalsis",$conex)
		or die("ERROR con la base de datos");



/////////////  FECHAS ///////////////
$consultaF= "SELECT *  FROM  fechaReportes";
$resultadoF= mysql_query($consultaF,$conex) or die (mysql_error());
$filaF=mysql_fetch_array($resultadoF);
$fechaI = $filaF['fechaInicio'];
$fechaF = $filaF['fechaFinal'];


//$fechaInicio='2016-06-01';
//$fechaFinal='2016-06-06';


$fechaInicio=$fechaI;
$fechaFinal=$fechaF;


//echo $fechaInicio; echo '<br>';
//echo $fechaFinal; echo '<br>';


/////////////  VENTAS ///////////////
$consultaA= "SELECT SUM(total) AS totalVentas FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal'";

//echo $consultaA;



$resultadoA= mysql_query($consultaA,$conex) or die (mysql_error());
$filaA=mysql_fetch_array($resultadoA);
$totalVentas = $filaA['totalVentas'];


/////////////  GASTOS ///////////////
$consulta= "SELECT SUM( gasto ) AS totalGastos FROM  gastos  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal'";
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
$totalGastos = $fila['totalGastos'];


 $ventas=$totalVentas;
 $gastos=$totalGastos;







/////////////  INGRESOS  ///////////////
$consulta1= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 0,1";
$resultado1= mysql_query($consulta1,$conex) or die (mysql_error());
$fila1=mysql_fetch_array($resultado1);
$totalVentas1 = $fila1['total'];

$consulta2= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 1,1";
$resultado2= mysql_query($consulta2,$conex) or die (mysql_error());
$fila2=mysql_fetch_array($resultado2);
$totalVentas2 = $fila2['total'];



$consulta3= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 2,1";
$resultado3= mysql_query($consulta3,$conex) or die (mysql_error());
$fila3=mysql_fetch_array($resultado3);
$totalVentas3 = $fila3['total'];


$consulta4= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 3,1";
$resultado4= mysql_query($consulta4,$conex) or die (mysql_error());
$fila4=mysql_fetch_array($resultado4);
$totalVentas4 = $fila4['total'];


$consulta5= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 4,1";
$resultado5= mysql_query($consulta5,$conex) or die (mysql_error());
$fila5=mysql_fetch_array($resultado5);
$totalVentas5 = $fila5['total'];


$consulta6= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 5,1";
$resultado6= mysql_query($consulta6,$conex) or die (mysql_error());
$fila6=mysql_fetch_array($resultado6);
$totalVentas6 = $fila6['total'];


$consulta7= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 6,1";
$resultado7= mysql_query($consulta7,$conex) or die (mysql_error());
$fila7=mysql_fetch_array($resultado7);
$totalVentas7 = $fila7['total'];

$consulta8= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 7,1";
$resultado8= mysql_query($consulta8,$conex) or die (mysql_error());
$fila8=mysql_fetch_array($resultado8);
$totalVentas8 = $fila8['total'];

$consulta9= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 8,1";
$resultado9= mysql_query($consulta9,$conex) or die (mysql_error());
$fila9=mysql_fetch_array($resultado9);
$totalVentas9 = $fila9['total'];

$consulta10= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 9,1";
$resultado10= mysql_query($consulta10,$conex) or die (mysql_error());
$fila10=mysql_fetch_array($resultado10);
$totalVentas10 = $fila10['total'];


$consulta11= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 10,1";
$resultado11= mysql_query($consulta11,$conex) or die (mysql_error());
$fila1=mysql_fetch_array($resultado11);
$totalVentas11 = $fila1['total'];

$consulta12= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 11,1";
$resultado12= mysql_query($consulta12,$conex) or die (mysql_error());
$fila12=mysql_fetch_array($resultado12);
$totalVentas12 = $fila12['total'];



$consulta13= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 12,1";
$resultado13= mysql_query($consulta13,$conex) or die (mysql_error());
$fila13=mysql_fetch_array($resultado13);
$totalVentas13 = $fila13['total'];


$consulta14= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 13,1";
$resultado14= mysql_query($consulta14,$conex) or die (mysql_error());
$fila14=mysql_fetch_array($resultado14);
$totalVentas14 = $fila4['total'];


$consulta15= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 14,1";
$resultado15= mysql_query($consulta15,$conex) or die (mysql_error());
$fila15=mysql_fetch_array($resultado15);
$totalVentas15 = $fila15['total'];


$consulta16= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 15,1";
$resultado16= mysql_query($consulta16,$conex) or die (mysql_error());
$fila16=mysql_fetch_array($resultado16);
$totalVentas16 = $fila16['total'];


$consulta17= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 16,1";
$resultado17= mysql_query($consulta17,$conex) or die (mysql_error());
$fila17=mysql_fetch_array($resultado17);
$totalVentas17 = $fila17['total'];



$consulta18= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 17,1";
$resultado18= mysql_query($consulta18,$conex) or die (mysql_error());
$fila18=mysql_fetch_array($resultado18);
$totalVentas18 = $fila8['total'];



$consulta19= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 18,1";
$resultado19= mysql_query($consulta19,$conex) or die (mysql_error());
$fila19=mysql_fetch_array($resultado19);
$totalVentas19 = $fila19['total'];



$consulta20= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 19,1";
$resultado20= mysql_query($consulta20,$conex) or die (mysql_error());
$fila20=mysql_fetch_array($resultado20);
$totalVentas20 = $fila20['total'];






$consulta21= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 20,1";
$resultado21= mysql_query($consulta21,$conex) or die (mysql_error());
$fila21=mysql_fetch_array($resultado21);
$totalVentas21 = $fila21['total'];




$consulta22= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 21,1";
$resultado22= mysql_query($consulta22,$conex) or die (mysql_error());
$fila22=mysql_fetch_array($resultado22);
$totalVentas22 = $fila22['total'];





$consulta23= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 22,1";
$resultado23= mysql_query($consulta23,$conex) or die (mysql_error());
$fila23=mysql_fetch_array($resultado3);
$totalVentas23 = $fila23['total'];




$consulta24= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 23,1";
$resultado24= mysql_query($consulta24,$conex) or die (mysql_error());
$fila24=mysql_fetch_array($resultado24);
$totalVentas24 = $fila24['total'];




$consulta25= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 24,1";
$resultado25= mysql_query($consulta25,$conex) or die (mysql_error());
$fila25=mysql_fetch_array($resultado25);
$totalVentas25 = $fila25['total'];





$consulta26= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 25,1";
$resultado26= mysql_query($consulta26,$conex) or die (mysql_error());
$fila26=mysql_fetch_array($resultado26);
$totalVentas26 = $fila26['total'];




$consulta27= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 26,1";
$resultado27= mysql_query($consulta27,$conex) or die (mysql_error());
$fila27=mysql_fetch_array($resultado27);
$totalVentas27 = $fila27['total'];




$consulta28= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 27,1";
$resultado28= mysql_query($consulta28,$conex) or die (mysql_error());
$fila28=mysql_fetch_array($resultado28);
$totalVentas28 = $fila28['total'];



$consulta29= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 28,1";
$resultado29= mysql_query($consulta29,$conex) or die (mysql_error());
$fila29=mysql_fetch_array($resultado29);
$totalVentas29 = $fila29['total'];



$consulta30= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 29,1";
$resultado30= mysql_query($consulta30,$conex) or die (mysql_error());
$fila30=mysql_fetch_array($resultado30);
$totalVentas30 = $fila30['total'];



$consulta31= "SELECT * FROM  ventasDiaC  WHERE  fecha
                BETWEEN '$fechaInicio'  AND '$fechaFinal' limit 30,1";
$resultado31= mysql_query($consulta31,$conex) or die (mysql_error());
$fila31=mysql_fetch_array($resultado31);
$totalVentas31 = $fila31['total'];




?>


<?PHP 






?>








<script language="javascript">

$(document).ready(function() {


    var doughnutData = [
        {
            value:<?PHP echo $ventas;?>,
            color:"#F7464A"
        },
        {
             value:<?PHP echo $gastos;?>,
            color : "#99ff00"
        }

    ];
    var lineChartData = {
        labels : ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [<?PHP echo $totalVentas1;?>,<?PHP echo $totalVentas2;?>,<?PHP echo $totalVentas3;?>,<?PHP echo $totalVentas4;?>,<?PHP echo $totalVentas5;?>,<?PHP echo $totalVentas6;?>,<?PHP echo $totalVentas7;?>,<?PHP echo $totalVentas8;?>,<?PHP echo $totalVentas9;?>,<?PHP echo $totalVentas10;?>,<?PHP echo $totalVentas11;?>,<?PHP echo $totalVentas12;?>,<?PHP echo $totalVentas13;?>,<?PHP echo $totalVentas14;?>,<?PHP echo $totalVentas15;?>,<?PHP echo $totalVentas16;?>,<?PHP echo $totalVentas17;?>,<?PHP echo $totalVentas18;?>,<?PHP echo $totalVentas19;?>,<?PHP echo $totalVentas20;?>,<?PHP echo $totalVentas21;?>,<?PHP echo $totalVentas22;?>,<?PHP echo $totalVentas23;?>,<?PHP echo $totalVentas24;?>,<?PHP echo $totalVentas25;?>,<?PHP echo $totalVentas26;?>,<?PHP echo $totalVentas27;?>,<?PHP echo $totalVentas28;?>,<?PHP echo $totalVentas29;?>,<?PHP echo $totalVentas30;?>]
            }
        ]

    };







    var pieData = [
        {
            value: 30,
            color:"#F38630"
        },
        {
            value : 50,
            color : "#E0E4CC"
        },
        {
            value : 100,
            color : "#69D2E7"
        }

    ];
    var barChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };
    var chartData = [
        {
            value : Math.random(),
            color: "#D97041"
        },
        {
            value : Math.random(),
            color: "#C7604C"
        },
        {
            value : Math.random(),
            color: "#21323D"
        },
        {
            value : Math.random(),
            color: "#9D9B7F"
        },
        {
            value : Math.random(),
            color: "#7D4F6D"
        },
        {
            value : Math.random(),
            color: "#584A5E"
        }
    ];
    var radarChartData = {
        labels : ["","","","","","",""],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,100]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };
    new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
    new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
    new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
    new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
    new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
    new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);


});

 </script>
