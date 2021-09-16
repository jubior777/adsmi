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

if (isset($_POST['update_data_idioma'])) {
    $usuarioLogin = $_POST['usuarioLogin'];
    $passwordLogin = $_POST['passwordLogin'];
    $idIdiomaSytem = $_POST['idIdioma'];
    $idioma = $_POST['idioma'];

    if ($idioma == "Español") {
        $idiomaConfiguration = array(
            array('14', 'Principal'),
            array('15', 'Configuracion'),
            array('16', 'Proveedores'),
            array('17', 'Clientes'),
            array('18', 'Productos'),
            array('19', 'Inventario'),
            array('20', 'Ventas'),
            array('21', 'Cuentas'),
            array('22', 'Pedidos'),
            array('23', 'Consolidar'),
            array('24', 'Reporte'),
            array('25', 'Reportes Graficos')
        );

        foreach ($idiomaConfiguration as $idiomaElegido) {
            list($idIdioma, $opcionMenu) = $idiomaElegido;
            $updateIdiomaMenu = $con->updateIdiomaSistem($opcionMenu, $idIdioma);
        }


    }
    if ($idioma == "Portugues") {

        $idiomaConfiguration = array(
            array('14', 'Diretor'),
            array('15', 'Configuração'),
            array('16', 'Vendedores'),
            array('17', 'Clientes'),
            array('18', 'Produtos'),
            array('19', 'Inventário'),
            array('20', 'Vendas'),
            array('21', 'Contas'),
            array('22', 'Pedidos'),
            array('23', 'Consolidar'),
            array('24', 'Relatório'),
            array('25', 'Relatórios Gráficos')
        );

        foreach ($idiomaConfiguration as $idiomaElegido) {
            list($idIdioma, $opcionMenu) = $idiomaElegido;
            $updateIdiomaMenu = $con->updateIdiomaSistem($opcionMenu, $idIdioma);
        }


    }
    if ($idioma == "Ingles") {

        $idiomaConfiguration = array(
            array('14', 'Main'),
            array('15', 'Setting'),
            array('16', 'vendors'),
            array('17', 'Customers'),
            array('18', 'Products'),
            array('19', 'Inventory'),
            array('20', 'Sales'),
            array('21', 'Accounts'),
            array('22', 'Orders'),
            array('23', 'Consolidate'),
            array('24', 'Report'),
            array('25', 'Graphic Reports')
        );

        foreach ($idiomaConfiguration as $idiomaElegido) {
            list($idIdioma, $opcionMenu) = $idiomaElegido;
            $updateIdiomaMenu = $con->updateIdiomaSistem($opcionMenu, $idIdioma);
        }
    }


    $mensaje = "Se Actualizo  los datos del Idioma !!!";
    $alerta = "alert alert-info";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
    $updateDatosIdioma = $con->updateDataIdioma($idioma, $idIdiomaSytem);


}
$urlController = URL_CONTROLLER;
header("Location: Languaje.php?usuario=$usuarioLogin&password=$passwordLogin&estado='Activo'");


?>
