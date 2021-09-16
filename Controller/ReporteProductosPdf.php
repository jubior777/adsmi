<?php
require('../Model/Connexion.php');
require('Constans.php');

$con = new conexion();

if(isset($_GET['productos'])){
    $allProducto =$con->getAllProducto();
    require('../Views/ReporteProductosPdf.php');
}

if(isset($_GET['inventario'])){
    $allactivo =$con->getAllActivos();
    require('../Views/ReporteInventarioPdf.php');
}




?>