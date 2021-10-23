<?php

class conexion {

    private $user;
    private $password;
    private $server;
    private $database;
    private $con;

    public function __construct()
    {
        $user = 'root';
        $password = '';
        $server = 'localhost';
        $database = 'adsmimed';
        $this->con = new mysqli($server, $user, $password, $database);
    }

    public function getUser($usuario, $password)
    {

        $query = $this->con->query("SELECT * FROM usuarios WHERE login='" . $usuario . "' AND password='" . $password . "'");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }

    public function getMenuMain()
    {

        $query = $this->con->query("SELECT * FROM `menu`");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }

    public function getMenuMainVentas()
    {

        $query = $this->con->query("SELECT * FROM `menu` where acceso ='A'");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }

    public function getAllUserData()
    {

        $query = $this->con->query("SELECT * FROM usuarios ");

        return $query;
    }

    public function getOnlyUserData($idUser)
    {

        $query = $this->con->query("SELECT * FROM usuarios where id_usu=$idUser");
        $retorno = [];
        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }

    public function getPreventa()
    {
        $query = $this->con->query("SELECT idPreventa,imagen,producto,COUNT(producto) as cantidad, SUM(precio) as totalPrecio,idProducto,pventa,idUser,precio,tipo 
                                            FROM `preventa` 
                                            GROUP BY producto,idProducto,tipo 
                                            ORDER BY idPreventa ASC");
        return $query;
    }


    public function getTotalPreventa()
    {
        $query = $this->con->query("SELECT Sum(precio) as total , idUser FROM `preventa`");
        return $query;
    }

    public function getRegisterNewUser($nombre, $tipo, $usuario, $password, $imagenUsuario)
    {

        $query = $this->con->query("INSERT INTO `usuarios` (`id_usu`, `login`, `tipo`, `nombre`, `password`, `foto`) 
                                            VALUES (NULL, '$usuario', '$tipo', '$nombre', '$password', '$imagenUsuario')");
        return $query;
    }

    public function deleteUsuario($idUsuario)
    {

        $query = $this->con->query("DELETE FROM usuarios Where id_usu=$idUsuario ");

        return $query;
    }

    public function eliminarUsuario($idUsuario)
    {

        $result = $query = $this->con->query("DELETE FROM usuarios Where id_usu=$idUsuario ");

        if($result) {
            $respuesta = array('status' => true,'msg' => 'Eliminado');
        } else {
            $respuesta = array('status' => false,'msg' => 'Error al eliminar');
        }
        echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);

        return $respuesta;
    }

    public function updateUsuario($login, $tipo, $nombre, $password, $foto, $idUsuario)
    {

        $query = $this->con->query("UPDATE `usuarios` 
                                          SET `login` = '$login', 
                                               `tipo` = '$tipo', 
                                                `nombre` = '$nombre',
                                                 `password` = '$password', 
                                                 `foto` = '$foto' WHERE `usuarios`.`id_usu` = $idUsuario");

        return $query;
    }

    public function getMensajeAlerta()
    {

        $query = $this->con->query("SELECT * FROM `alerta`");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;

    }

    public function updateMensajeAlert($mensaje, $alerta)
    {
        $query = $this->con->query("UPDATE `alerta` SET `tipoAlerta` = '$alerta',
                                                `mensaje` = '$mensaje'  WHERE `alerta`.`alertaId` = 1");
        return $query;
    }

    public function getDataFactura()
    {
        $query = $this->con->query("SELECT * FROM `datos`");
        return $query;
    }

    public function updateDataFactura($propietario, $razon, $direccion, $nro, $telefono)
    {

        $query = $this->con->query("UPDATE `datos` SET `propietario` = '$propietario', 
                                                             `razon` = '$razon',
                                                             `direccion` = '$direccion', 
                                                              `nro` = '$nro',
                                                              `telefono` = '$telefono'
                                                               WHERE `datos`.`iddatos` = 1");
        return $query;
    }

    public function getMoneda()
    {
        $query = $this->con->query("SELECT * FROM `moneda`");
        return $query;
    }

    public function updateDataMoneda($idMoneda, $pais, $tipoMoneda, $contexto)
    {

        $query = $this->con->query("UPDATE `moneda` SET 
                                          `pais` = '$pais', 
                                          `tipoMoneda` = '$tipoMoneda', 
                                          `contexto` = '$contexto' WHERE `moneda`.`idMoneda` = $idMoneda ");
        return $query;
    }


    public function updateDataIdioma($idioma, $idIdioma)
    {

        $query = $this->con->query("UPDATE `idioma`
                                          SET `idioma` = '$idioma' 
                                          WHERE `idioma`.`idIdioma` = $idIdioma");
        return $query;
    }

    public function getIdioma()
    {
        $query = $this->con->query("SELECT * FROM `idioma`");
        return $query;
    }

    public function updateIdiomaSistem($opcionMenu, $idIdioma)
    {
        $query = $this->con->query("UPDATE `menu` 
                                          SET `opcion` = '$opcionMenu' 
                                          WHERE `menu`.`idmenu` = $idIdioma ");
        return $query;
    }

    public function getAllProveedor()
    {

        $query = $this->con->query("SELECT * FROM proveedor ");

        return $query;
    }

    public function registerNewProveedor($proveedor, $responsable, $direccion, $telefono, $fechaRegistro)
    {

        $query = $this->con->query("INSERT INTO `proveedor` (`idproveedor`, `proveedor`, `responsable`, `fechaRegistro`, `direccion`, `telefono`, `estado`, `fechaAviso`, `valor`, `valorCobrado`, `saldo`)
                                               VALUES (NULL, '$proveedor', '$responsable', '$fechaRegistro', '$direccion', '$telefono', '', '', '', '', '') ");

        return $query;
    }

    public function deleteProveedor($idProveedor)
    {
        $query = $this->con->query("Delete from proveedor where idproveedor=$idProveedor ");

        return $query;
    }


    public function updateProveedor($idProveedor, $proveedor, $responsable, $direccion, $telefono, $fechaRegistro)
    {

        $query = $this->con->query("UPDATE `proveedor` SET `proveedor` = '$proveedor', 
                                            `responsable` = '$responsable', 
                                            `fechaRegistro` = '$fechaRegistro', 
                                            `direccion` = '$direccion',
                                             `telefono` = '$telefono' WHERE `proveedor`.`idproveedor` = $idProveedor");

        return $query;
    }

    public function getAllCliente()
    {

        $query = $this->con->query("SELECT * FROM cliente ");

        return $query;
    }

    public function registerNewCliente($imagen, $nombre, $apellido, $direccion, $telefonoFijo, $telefonoCelular, $email, $fechaRegistro, $cc)
    {

        $query = $this->con->query("INSERT INTO `cliente` (`idcliente`, `foto`, `nombre`, `apellido`, `direccion`, `telefonoFijo`, `telefonoCelular`, `email`,
                                                 `observaciones`, `fechaRegistro`, `cc`) VALUES (NULL, '$imagen', ' $nombre ', '$apellido', '$direccion', '$telefonoFijo', '$telefonoCelular', 
                                                 ' $email', '', '$fechaRegistro', '$cc')");

        return $query;
    }
                                    


    public function updateClient($idcliente, $imagen, $nombre, $apellido, $direccion, $telefonoFijo, $telefonoCelular, $email, $fechaRegistro, $cc)
    {

        $query = $this->con->query("UPDATE `cliente` SET 
                                                `foto` = '$imagen', 
                                                `nombre` = '$nombre', 
                                                `apellido` = '$apellido', 
                                                `direccion` = '$direccion',
                                                `telefonoFijo` = '$telefonoFijo', 
                                                `telefonoCelular` = '$telefonoCelular', 
                                                `email` = '$email', 
                                                `fechaRegistro` = '$fechaRegistro', 
                                                `cc` = '$cc' WHERE `cliente`.`idcliente` = $idcliente");

        return $query;
    }

    public function deleteClient($idClient)
    {
        $query = $this->con->query("Delete from cliente where idcliente=$idClient ");

        return $query;
    }


    public function getTipoMoneda()
    {

        $query = $this->con->query("SELECT * FROM `moneda`");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;

    }


    public function getProductoElegido($idproducto)
    {

        $query = $this->con->query("SELECT * FROM `producto` where idproducto='$idproducto'");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;

    }


    public function insertarPreventaProducto($imagen, $producto, $precio, $idProducto, $pventa, $idUser, $tipo)
    {
        $query = $this->con->query("INSERT INTO `preventa` (`idPreventa`, `imagen`, `producto`, `precio`, `idProducto`, `pventa`, `idUser`, `tipo`)
                                          VALUES (NULL, '$imagen', '$producto', '$precio', '$idProducto', '$pventa', '$idUser', '$tipo')");

        return $query;
    }


    public function getAllProducto()
    {

        $query = $this->con->query("SELECT * FROM producto");

        return $query;
    }

    public function getAllTipoProducto()
    {
        $query = $this->con->query("SELECT * FROM tipoproducto");

        return $query;
    }


    public function registerNewProducto($imagen, $codigo, $nombreProducto, $cantidad, $fechaRegistro, $precioVenta, $tipo, $proveedor, $precioCompra)
    {

        $query = $this->con->query("INSERT INTO `producto` (`idproducto`, `imagen`, `codigo`, `nombreProducto`, `cantidad`, `fechaRegistro`, `precioVenta`, `tipo`, `proveedor`, `precioCompra`) 
                                          VALUES (NULL, '$imagen', '$codigo', '$nombreProducto', '$cantidad', '$fechaRegistro', '$precioVenta', '$tipo', '$proveedor', '$precioCompra')");

        return $query;
    }

    public function deleteProduct($idproducto)
    {
        $query = $this->con->query("Delete from producto where idproducto=$idproducto");

        return $query;
    }

    public function deleteOnlyPreventa($idProducto, $tipo)
    {
        $query = $this->con->query("Delete from preventa where idproducto='$idProducto'  and  tipo='$tipo'");
        return $query;
    }

    public function deleteAllPreventa()
    {
        $query = $this->con->query("TRUNCATE `preventa`");
        return $query;
    }


    public function updateProduct($imagen, $codigo, $nombreProducto, $cantidad, $fechaRegistro, $precioVenta, $tipo, $proveedor, $precioCompra, $idproducto)
    {

        $query = $this->con->query("UPDATE `producto` SET `imagen` = '$imagen', 
                                                     `codigo` = '$codigo',
                                                     `nombreProducto` = '$nombreProducto',
                                                     `cantidad` = '$cantidad', 
                                                     `fechaRegistro` = '$fechaRegistro', 
                                                     `precioVenta` = '$precioVenta', 
                                                     `tipo` = '$tipo',
                                                      `proveedor` = '$proveedor', 
                                                      `precioCompra` = '$precioCompra' WHERE `producto`.`idproducto` = $idproducto");

        return $query;
    }


    public function registerNewTipoProduct($tipoProducto)
    {
        $query = $this->con->query("INSERT INTO `tipoproducto` (`idtipoproducto`, `tipoproducto`) 
                                          VALUES (NULL, '$tipoProducto')");

        return $query;

    }

    public function deleteTipoProduct($tipoProductoId)
    {
        $query = $this->con->query("Delete from tipoproducto where idtipoproducto=$tipoProductoId");

        return $query;
    }

    public function updateTipoProducto($tipoProductoId, $tipoproducto)
    {
        $query = $this->con->query("UPDATE `tipoproducto` SET `tipoproducto` = '$tipoproducto'
                                          WHERE `tipoproducto`.`idtipoproducto` = $tipoProductoId");

        return $query;
    }

    public function getAllActivos()
    {
        $query = $this->con->query("SELECT * FROM activos ");

        return $query;
    }

    public function registerNewActivo($imagen, $codigo, $nombreProducto, $cantidad, $fechaRegistro)
    {

        $query = $this->con->query("INSERT INTO `activos` (`idactivo`, `imagen`, `codigo`, `nombreProducto`, `cantidad`, `fechaRegistro`) 
                                          VALUES (NULL, '$imagen', '$codigo', '$nombreProducto', '$cantidad', '$fechaRegistro')");

        return $query;
    }

    public function deleteActivo($idproducto)
    {
        $query = $this->con->query("Delete from activos where idactivo=$idproducto");

        return $query;
    }

    public function updateActivo($imagen, $codigo, $nombreProducto, $cantidad, $fechaRegistro, $idproducto)
    {

        $query = $this->con->query("UPDATE `activos` SET `imagen` = '$imagen', 
                                                     `codigo` = '$codigo',
                                                     `nombreProducto` = '$nombreProducto',
                                                     `cantidad` = '$cantidad', 
                                                     `fechaRegistro` = '$fechaRegistro' 
                                                      WHERE `activos`.`idactivo` = $idproducto");

        return $query;
    }

    public function getDataProductoChoose($idProducto, $tipo)
    {

        $query = $this->con->query("SELECT * FROM `preventa` where idproducto='$idProducto' and tipo='$tipo'");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;

    }


    public function getCantidadProductoChoose($idProducto, $tipo)
    {
        $query = $this->con->query("SELECT count(idproducto) as cantidadTotal FROM `preventa` where idproducto='$idProducto' and tipo='$tipo'");

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;

    }

    public function getContact($nitClient)
    {
        $query = $this->con->query("SELECT * FROM `cliente`  where  cc='$nitClient'");
        return $query;
    }

    public function getDatosFactura()
    {
        $query = $this->con->query("SELECT * FROM `datos`");
        return $query;
    }

    public function getDatosDosificacion()
    {
        $query = $this->con->query("SELECT * FROM `dosificacion`");
        return $query;
    }


    public function registrarDatosPreventa($cc, $nombre, $totalAPagar, $efectivo, $cambio, $fechaVenta, $idcliente)
    {
        $query = $this->con->query("INSERT INTO `clientedato` (`idCliente`, `nombre`, `cc`, `fecha`, `totalApagar`, `efectivo`, `cambio`, `idClientei`, `tipoVenta`) 
                                            VALUES (NULL , '$nombre', '$cc', '$fechaVenta', '$totalAPagar', '$efectivo', '$cambio', '$idcliente', 'Local');");
        return $query;
    }

    public function getDataCliente()
    {
        $query = $this->con->query("SELECT * FROM `clientedato` order by idcliente DESC  limit 1");
        return $query;
    }


    public function getClienteDatos($nitClient)
    {
        $query = $this->con->query("select * from cliente where cc = $nitClient ");
        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }

    public function getPedidoTotalForFactura()
    {
        $query = $this->con->query("SELECT idpreventa,imagen,producto,precio, count( idproducto ) AS cantidad, precio*count( idproducto ) as totalPrecio, idproducto, pventa ,tipo FROM `preventa`  GROUP BY idproducto");
        return $query;
    }


    public function getNumFicha($dateInicial, $dateFinal)
    {
        $query = $this->con->query("SELECT (COUNT(*) +1 ) as numficha FROM `ventatotal` WHERE fecha >= '$dateInicial 00:00:00' and fecha <= '$dateFinal 23:59:00'");
        return $query;
    }

    public function getAllVenta()
    {
        $query = $this->con->query("SELECT * FROM `ventatotal`");
        return $query;
    }

    public function registrarNewVenta($nombre, $cc, $totalAPagar, $efectivo, $cambio, $idCliente, $codigoControl, $fechaVenta)
    {
        $query = $this->con->query(" INSERT INTO `ventatotal` (`idVentas`, `nombre`, `cc`, `fecha`, `totalApagar`, `efectivo`, `cambio`, `idCliente`, `codigoControl`) 
        VALUES (NULL, '$nombre', '$cc', '$fechaVenta', '$totalAPagar', '$efectivo', '$cambio', '$idCliente', '$codigoControl')");
        return $query;
    }
                                                  

    public function getDatosVenta()
    {
        $query = $this->con->query("SELECT * FROM `datosventa`");
        return $query;
    }

    public function registrarDatosVenta($cantidad, $descripcion, $precio, $total, $tipo, $fechaVenta, $codigoControl, $idVentas, $estado)
    {
        $query = $this->con->query("INSERT INTO `datosventa` (`idDatosVentas`, `cantidad`, `descripcion`, `precio`, `total`, `tipo`, `fechaVenta`, `codigoControl`, `idVentas`, `estado`)
                                      VALUES (NULL, '$cantidad', '$descripcion', '$precio', '$total', '$tipo', '$fechaVenta', '$codigoControl', '$idVentas', '$estado')");
        return $query;
    }

    public function registrarDatosVentaTotal($cliente, $cantidad, $precio, $total, $codigoControl, $fechaVenta, $estado,$comentario)
    {
        $query = $this->con->query("INSERT INTO `datosventatotal` (`idVentas`, `cliente`, `cantidad`, `precio`, `total`, `codigoControl`, `fechaVenta`, `estado`, `comentario`) 
                                       VALUES (NULL, '$cliente', '$cantidad', '$precio', '$total', '$codigoControl', '$fechaVenta', '$estado','$comentario')");
        return $query;
    }

    public function registrarDatosClienteVenta($fechaVenta, $nitcc, $cliente, $codigoControl, $idVentas, $estado)
    {
        $query = $this->con->query("INSERT INTO `datosclienteventa` (`idClienteVenta`, `fechaVenta`, `nitCliente`, `cliente`, `codigoControl`, `idVentas`, `estado`)
                                             VALUES (NULL, '$fechaVenta', '$nitcc', '$cliente', '$codigoControl', '$idVentas', '$estado')");
        return $query;
    }

    public function registrarDatosFacturaVenta($nit, $factura, $numeroAutorizacion, $codigoControl, $idVentas, $estado)
    {
        $query = $this->con->query("INSERT INTO `datosfacturaventa` (`idDatosFactura`, `nit`, `factura`, `numeroAutorizacion`, `codigoControl`, `idVentas`, `estado`)
                                              VALUES (NULL, '$nit', '$factura', '$numeroAutorizacion', '$codigoControl', '$idVentas', '$estado')");
        return $query;
    }

    public function cleanRegistroPreventa()
    {
        $query = $this->con->query("truncate `preventa`");
        return $query;
    }

    public function cleanClientData()
    {
        $query = $this->con->query("truncate `clientedato`");
        return $query;
    }

    public function getAllGastos()
    {

        $query = $this->con->query("SELECT * FROM `gastos` order by idgastos desc");
        return $query;
    }


    public function registerNewAccount($tipo, $descripcion, $entrada, $fechaRegistro, $usuario, $salida)
    {

        $query = $this->con->query("INSERT INTO `gastos` (`idgastos`, `descripcion`, `entrada`, `usuario`, `salida`, `tipo`,`fechaRegistro`) 
                                            VALUES (NULL, '$descripcion', '$entrada', '$usuario', '$salida', '$tipo','$fechaRegistro')");
        return $query;
    }


    public function deleteAccount($idCuenta)
    {
        $query = $this->con->query("DELETE FROM `gastos` WHERE `idgastos` = $idCuenta");
        return $query;
    }


    public function updateAccount($tipo, $descripcion, $entrada, $fechaRegistro, $usuario, $salida, $idCuenta)
    {

        $query = $this->con->query("UPDATE `gastos` SET `descripcion` = '$descripcion', 
                                                                `entrada` = '$entrada',
                                                                `fechaRegistro` = '$fechaRegistro',
                                                                 `usuario` = '$usuario', 
                                                                 `salida` = '$salida', 
                                                                 `tipo` = '$tipo' WHERE `idgastos` = $idCuenta");
        return $query;
    }

    public function getAllPedido()
    {
        $query = $this->con->query('SELECT * FROM pedido order by idpedido desc ');
        return $query;
    }

    public function registerNewPedido($descripcion, $total, $empresa, $usuario, $fechaRegistro)
    {
        $query = $this->con->query("INSERT INTO `pedido` (`idPedido`, `descripcion`, `total`, `proveedor`, `usuario`, `fechaRegistro`) 
                                            VALUES (NULL, '$descripcion', '$total', '$empresa', '$usuario', '$fechaRegistro')");
        return $query;
    }

    public function deletePedido($idPedido)
    {
        $query = $this->con->query("DELETE FROM pedido WHERE idPedido=$idPedido");
        return $query;
    }

    public function updatePedido($descripcion, $total, $proveedor, $usuarioLogin, $fechaRegistro, $idPedido)
    {
        $query = $this->con->query("UPDATE `pedido` SET `descripcion` = '$descripcion',
                                                    `total` = '$total', `proveedor` = '$proveedor',
                                                     `usuario` = '$usuarioLogin', `fechaRegistro` = '$fechaRegistro'
                                                      WHERE `pedido`.`idPedido` = $idPedido ");
        return $query;
    }


    public function insertarComentarioFicha($idVenta, $comentario)
    {
        $query = $this->con->query("UPDATE `datosventatotal` SET `comentario` = '$comentario' WHERE `idVentas` = $idVenta");
        return $query;
    }


    public function getAllVentas()
    {
        $query = $this->con->query('SELECT * FROM datosventatotal where estado=\'NoConsolidado\' order by idVentas ASC ');
        return $query;
    }

    public function updateDatosclienteventa($codigoControl)
    {
        $query = $this->con->query("UPDATE `datosclienteventa` SET `estado` = 'Consolidado' WHERE `codigoControl` = '$codigoControl'");
        return $query;
    }

    public function updateDatosfacturaventa($codigoControl)
    {
        $query = $this->con->query("UPDATE `datosfacturaventa` SET `estado` = 'Consolidado' WHERE `codigoControl` = '$codigoControl'");
        return $query;
    }

    public function updateDatosventa($codigoControl)
    {
        $query = $this->con->query("UPDATE `datosventa` SET `estado` = 'Consolidado' WHERE `codigoControl` = '$codigoControl'");
        return $query;
    }

    public function updateDatosventatotal($codigoControl)
    {
        $query = $this->con->query("UPDATE `datosventatotal` SET `estado` = 'Consolidado' WHERE `codigoControl` = '$codigoControl'");
        return $query;
    }

    public function getVentasDia($fechaInicial,$fechaFinal)
    {
        $query = $this->con->query("SELECT * FROM `datosventatotal` WHERE fechaVenta >= '$fechaInicial' and fechaVenta < '$fechaFinal' and estado='Consolidado'");
        return $query;
    }


    public function getVentasTotalesDia($fechaInicial,$fechaFinal)
    {
        $query = $this->con->query("SELECT SUM(total) as totalVentas FROM `datosventatotal` WHERE fechaVenta >= '$fechaInicial' and fechaVenta < '$fechaFinal' and estado='Consolidado'");
        return $query;
    }



    public function getVentasProductoByDia($fechaInicial,$fechaFinal)
    {
        $query = $this->con->query("SELECT * FROM `datosventa` WHERE fechaVenta >= '$fechaInicial' and fechaVenta < '$fechaFinal' and estado='Consolidado'");
        return $query;
    }


    public function getVentasProductoTotalesDia($fechaInicial,$fechaFinal)
    {
        $query = $this->con->query("SELECT SUM(total) as totalVentas FROM `datosventa` WHERE fechaVenta >= '$fechaInicial' and fechaVenta < '$fechaFinal' and estado='Consolidado'");
        return $query;
    }


    public function getVentasMensuales()
    {

        $query = $this->con->query("SELECT MonthName(fecha) as mes FROM datosventatotal GROUP BY MONTH(fechaVenta) ASC");
        return $query;
    }

    public function getSumaTotalVentasByMes($mes, $anio)
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as totalVentas FROM datosventatotal WHERE MONTH(fechaVenta) = '$mes' AND YEAR(fechaVenta) = '$anio'");
        return $query;
    }


    public function getTotalVentasByMes($mes, $anio)
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, DAY(fechaVenta) as dia FROM datosventatotal WHERE MONTH(fechaVenta) = '$mes' AND YEAR(fechaVenta) = '$anio' GROUP BY DAY(fechaVenta) ASC");
        return $query;
    }


    public function getTotalVentasByYear($anio)
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as totalVentas FROM datosventatotal WHERE  YEAR(fechaVenta) = '$anio'");
        return $query;
    }

    public function getTotalVentasByAnio($anio)
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, MonthName(fechaVenta) as mes FROM datosventatotal  WHERE  YEAR(fechaVenta) = '$anio'   GROUP BY MONTH(fechaVenta) ASC");
        return $query;
    }


    public function getTotalVentas6Meses()
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, MonthName(fechaVenta) as mes FROM datosventatotal  WHERE fechaVenta BETWEEN date_sub(now(), interval 6 month) AND NOW() GROUP BY MONTH(fechaVenta) ASC");
        return $query;
    }

    public function getGrandTotalVentas6Meses()
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as totalVentas FROM datosventatotal WHERE fechaVenta BETWEEN date_sub(now(), interval 6 month) AND NOW()");
        return $query;
    }



    public function getGatosDeLaEmpresa($fechaVentasI, $fechaVentasF)
    {
        $query = $this->con->query("SELECT  *
                                           FROM `gastos`
                                           WHERE fechaRegistro 
                                           BETWEEN '" . $fechaVentasI . "'  AND '" . $fechaVentasF . "' ");
        return $query;
    }

    public function getEntradasDeLaEmpresa($fechaVentasI, $fechaVentasF)
    {
        $query = $this->con->query("SELECT  SUM(entrada) as totalEntrada
                                           FROM `gastos`
                                           WHERE fechaRegistro 
                                           BETWEEN '" . $fechaVentasI . "'  AND '" . $fechaVentasF . "' ");
        return $query;
    }


    public function getTotalGatosDeLaEmpresa($fechaVentasI, $fechaVentasF)
    {
        $query = $this->con->query("SELECT  SUM(salida) as totalSalida
                                           FROM `gastos`
                                           WHERE fechaRegistro 
                                           BETWEEN '" . $fechaVentasI . "'  AND '" . $fechaVentasF . "' ");
        return $query;
    }


    public function getUtilidadDeLaEmpresa($fechaVentasI, $fechaVentasF)
    {
        $query = $this->con->query("SELECT  (SUM(entrada) - SUM(salida)) as utilidad 
                                           FROM `gastos`
                                           WHERE fechaRegistro 
                                           BETWEEN '" . $fechaVentasI . "'  AND '" . $fechaVentasF . "' ");
        return $query;
    }


    public function getSumTotalVentasMensuales()
    {
        $query = $this->con->query("SELECT MonthName(fechaVenta) as mes FROM datosventatotal  GROUP BY MONTH(fechaVenta) ASC");
        return $query;
    }


    public function getTotalVentasMensual()
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, MonthName(fechaVenta) as mes FROM datosventatotal where estado='Consolidado' GROUP BY MONTH(fechaVenta) ASC");
        return $query;
    }

    public function getTotalVentas()
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, MonthName(fechaVenta) as mes FROM datosventatotal  where estado='Consolidado'   GROUP BY MONTH(fechaVenta) ASC");
        return $query;
    }

    public function getTotalByMonthVentas($mes, $anio)
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, DAY(fechaVenta) as dia FROM datosventatotal WHERE  estado='Consolidado' and MONTH(fechaVenta) = '$mes' AND YEAR(fechaVenta) = '$anio'   GROUP BY DAY(fechaVenta) ASC");
        return $query;
    }

    public function getTotal6MonthVentas()
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, MonthName(fechaVenta) as mes FROM datosventatotal WHERE estado='Consolidado'  and fechaVenta BETWEEN date_sub(now(), interval 6 month) AND NOW() GROUP BY MONTH(fechaVenta)  ASC");
        return $query;
    }

    public function getTotalYearVentas($anio)
    {
        $query = $this->con->query("SELECT SUM(cantidad * precio) as total, MonthName(fechaVenta) as mes FROM datosventatotal  WHERE  estado='Consolidado' and  YEAR(fechaVenta) = '$anio'   GROUP BY MONTH(fechaVenta) ASC");
        return $query;
    }


    public function updateOpcionElegida($colorElegido,$idMenu)
    {

        $query = $this->con->query("UPDATE `menu` SET `color` = '$colorElegido' WHERE `idmenu` = $idMenu ");

        return $query;
    }

    public function updateOpcionDefecto($colorDefecto,$idMenu)
    {
        $query = $this->con->query("UPDATE `menu` SET `color` = '$colorDefecto' WHERE `idmenu` != $idMenu ");

        return $query;
    }

    public function getDataVentasTotal($fechaVentasI, $fechaVentasF)
    {
        $query = $this->con->query("SELECT descripcion as producto, cantidad, precio, SUM(cantidad * precio) as totalVendido,fechaVenta FROM `datosventa` 
                                           where estado='Consolidado' and fechaVenta  BETWEEN '" . $fechaVentasI . "'  AND '" . $fechaVentasF . "' group by descripcion");

        return $query;
    }

}

?>
