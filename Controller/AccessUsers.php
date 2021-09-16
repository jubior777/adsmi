<?php
require('../Model/Connexion.php');
require('Constans.php');


if (!isset($_SESSION)) {
    session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new conexion();


$searchUser = $con->getUser($usuario,$password);


foreach ($searchUser as $user) {
    $tipo = $user['tipo'];
    $id_usuario = $user['id_usu'];
    $nombres = $user['nombre'];
    $password = $user['password'];
    $foto = $user['foto'];
}
$colorElegido="#4e4e4e";
$colorDefecto="#0061c2";
$idMenu="1";

$updateMenuColorElegido=$con->updateOpcionElegida($colorElegido,$idMenu);
$updateMenuColorDefecto=$con->updateOpcionDefecto($colorDefecto,$idMenu);



if (empty($searchUser)) {
    echo '
     <script language = javascript>
	alert("Usuario o Password incorrectos, por favor intenta de nuevo")
	self.location = "../index.php"
	</script>
    ';
}
else if ($tipo == 'VENTAS'){

    $urlViews = URL_VIEWS;
    $userLogueado = $nombres;
    $imageUser =$foto;
    $menuMain = $con->getMenuMainVentas();

    require ('../Views/WellcomeVentas.php');

}
else if ($tipo == 'ADMINISTRADOR'){

     $urlViews = URL_VIEWS;
     $userLogueado = $nombres;
     $imageUser =$foto;



    $fechaInicial = date('2021-05-11');
    $fechaInicialVentas =  $fechaInicial.' '. '06:00:00';
    $fechaFinal = date('2021-05-11');

    date_default_timezone_set("America/Bogota" ) ;
    $tiempo = getdate(time());
    $fecha = date_create($fechaFinal);
    date_add($fecha, date_interval_create_from_date_string('1 days'));
    $fechaVentasU = date_format($fecha, 'Y-m-d');

    $fechaFinalVentas = $fechaVentasU.' '. '04:00:00';


    $totalVentas =$con->getDataVentasTotal($fechaInicialVentas, $fechaFinalVentas);
    $menuMain = $con->getMenuMain();

    require ('../Views/Wellcome.php');
}

?>

