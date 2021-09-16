<!DOCTYPE html>
<html lang="es">
<?php
include('Head.php');
?>
<body>
<section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>
        <?PHP include('Logo.php') ?>
        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <!--                              <input class="form-control" placeholder="Search" type="text">-->
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>
        <?PHP include('DropDown.php'); ?>
    </header>
    <?PHP include('Menu.php') ?>

</section>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> PRINCIPAL</h3>
                <div class="<?PHP echo $alerta; ?>" role="alert">
                    <strong><?PHP echo $mensaje; ?></strong>
                </div>

                <ol class="breadcrumb">
                  
                    <li>
                        <i class="fa fa-inbox"></i><a
                                href="Producto.php?usuario=<?php echo $usuario; ?>&password=<?php echo $password; ?>">Producto</a>
                    </li>
                    <li>
                        <i class="fa fa-plus"></i><a
                                href="TipoProducto.php?usuario=<?php echo $usuario; ?>&password=<?php echo $password; ?>">Registrar
                            Tipo Producto</a>
                    </li>
                </ol>
            </div>
        </div>

        <header class="panel-heading"> Lista de Productos </header>
        <header class="panel-heading">
            <div class="panel-body">
                <div align="right">

                    <a href="ReporteProductosPdf.php?inventario=inventario" target="_blank"
                       class="btn btn-danger tooltips"><i
                                class="fa fa-rotate-right"></i> EXPORTAR PDF </a>

                    <button href="#add" title="" data-placement="top" data-toggle="modal"
                            class="btn btn-primary tooltips" type="button" data-original-title="Nuevo Producto">
                        <span class="icon_bag_alt"></span>AGREGAR NUEVO PRODUCTO
                    </button>
                </div>
                <div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form action="RegistroActivo.php" method="post" enctype="multipart/form-data">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog" id="mdialTamanio">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x
                                    </button>
                                    <h3 id="myModalLabel" align="center">Registrar Informacion del Activos</h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <section class="panel">
                                                <div><strong>Agregar Imagen</strong></div>
                                                <br>
                                                <?php
                                                include('UploadViewImageCreate.php');
                                                ?>
                                            </section>
                                        </div>
                                        <div class="col-lg-8">
                                            <section class="panel">
                                                <div class="form-group">

                                                    <label class="col-sm-2 control-label">Codigo:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control input-lg m-bot15" id="codigo"
                                                               name="codigo" type="text" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Descripcion:</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="descripcion" name="descripcion" type="text"
                                                               required/>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="cantidad" class="control-label col-lg-2">Cantidad
                                                        :</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control input-lg m-bot15"
                                                               id="cantidad" name="cantidad"
                                                               placeholder="0.00" type="text" required/>
                                                    </div>

                                                </div>
                                                <div class="form-group">

                                                    <label for="fechaRegistr"
                                                           class="control-label col-lg-2">Fecha:</label>
                                                    <div class="col-lg-4">
                                                        <input class="form-control input-lg m-bot15" type="date"
                                                               readonly name="fechaRegistro" autocomplete="off"
                                                               value="<?php echo date('Y-m-d'); ?>">
                                                    </div>

                                                </div>

                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><strong>Cerrar</strong>
                                    </button>
                                    <button name="nuevo_Producto" type="submit" class="btn btn-primary">
                                        <strong>Registrar Nuevo Producto</strong></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>

        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>IMAGEN</th>
                        <th> CODIGO</th>
                        <th> PRODUCTO</th>
                        <th> DESCRIPCION</th>
                        <th>STOCK</th>
                        <th> FECHA REGISTRO</th>
                        <th> ACCIONES</th>
                    </tr>
                    </thead>
                    <?PHP
                    while ($product = mysqli_fetch_array($allactivo)) {
                        ?>

                        <tr>
                            <td><img src="<?php echo $urlViews . $product['imagen'] ?>" height="50"
                                     width="50"></td>
                            <td> <?PHP echo $product['codigo']; ?></td>
                            <td> <?PHP echo $product['nombreProducto']; ?></td>
                            <td> <?PHP echo $product['nombreProducto']; ?></td>
                            <td> <?PHP echo $product['cantidad']; ?></td>
                            <td> <?PHP echo $product['fechaRegistro']; ?></td>
                            <td>
                                <a href="#a<?php echo $product[0]; ?>" role="button"
                                   class="btn btn-success" data-toggle="modal">
                                    <i class="icon_check_alt2"></i>
                                </a>
                                <button class="btn btn-danger" onclick="eliminarCliente(<?PHP echo $product["0"]; ?>)"><i class="icon_close_alt2"></i></button>
                            </td>
                        </tr>

                        <div id="a<?php echo $product[0]; ?>" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <form class="form-validate form-horizontal" name="form2" enctype="multipart/form-data"
                                  action="RegistroActivo.php"
                                  method="post">
                                <input type="hidden" id="idactivo" name="idactivo"
                                       value="<?php echo $product['idactivo']; ?>">
                                <input type="hidden" name="imagen" value="<?php echo $product['imagen']; ?>">
                                <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                                <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">

                                <div class="modal-dialog" id="mdialTamanio">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">x
                                            </button>
                                            <h3 id="myModalLabel" align="center">Cambiar Informacion del
                                                Activo</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <section class="panel">
                                                        <img src="<?PHP echo $urlViews . $product['imagen']; ?>"
                                                             width="250"
                                                             height="250">
                                                        <br><br>
                                                        <div><strong>Cambiar Imagen</strong></div>
                                                        <?php include('UploadViewImageEdit.php'); ?>
                                                    </section>
                                                </div>
                                                <div class="col-lg-8">
                                                    <section class="panel">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Codigo:</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control input-lg m-bot15"
                                                                       id="codigo"
                                                                       name="codigo" type="text"
                                                                       value="<?php echo $product['codigo']; ?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Descripcion:</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control input-lg m-bot15"
                                                                       id="descripcion" name="descripcion"
                                                                       type="text"
                                                                       value="<?php echo $product['nombreProducto']; ?>"/>
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pdistribuidor"
                                                                   class="control-label col-lg-2">Cantidad :</label>
                                                            <div class="col-lg-4">
                                                                <input class="form-control input-lg m-bot15"
                                                                       id="cantidad" name="cantidad"
                                                                       placeholder="0.00" type="text"
                                                                       value="<?php echo $product['cantidad']; ?>"/>
                                                            </div>

                                                        </div>


                                                        <div class="form-group">
                                                            <label for="pventa"
                                                                   class="control-label col-lg-2">Fecha:</label>
                                                            <div class="col-lg-4">
                                                                <input class="form-control input-lg m-bot15"
                                                                       type="date"
                                                                       readonly name="fechaRegistro"
                                                                       autocomplete="off"
                                                                       value="<?php echo date('Y-m-d'); ?>">
                                                            </div>
                                                        </div>
                                                    </section>

                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                                <strong>Cerrar</strong></button>
                                            <button name="update_producto" type="submit" class="btn btn-primary">
                                                <strong>Editar</strong>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    <?php } ?>
                </table>
            </div>
        </div>
    </section>
</section>
<!--main content end-->

<?PHP include('LibraryJs.php'); ?>

<script>
    function eliminarCliente(idborrar) {
        var id = idborrar;

            Swal.fire({
            title: "Eliminar Producto",
            text: "Realmente desea eliminar el producto?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
        }).then((result) =>{
            if (result.isConfirmed) {
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var url = '<?php echo $urlController ?>RegistroActivo.php?idborrar='+id+'&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>'
                request.open('GET',url,true);
                var strData = '';
                request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                request.send(url);
                request.onreadystatechange = function() {
                    if(request.readyState == 4 && request.status == 200) {
                        window.location = '<?php echo $urlController ?>RegistroActivo.php?idborrar='+id+'&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>'
                        //location.reload();
                    }
                }
            }
        })

       
    }

</script>

</body>
</html>