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
        <?PHP include("Logo.php") ?>
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
        <?PHP include("DropDown.php"); ?>
    </header>
    <?PHP include("Menu.php") ?>

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
                        <i class="fa fa-home"></i><a
                                href="principal.php?usuario=<?php echo $usuario; ?>&password=<?php echo $password; ?>">Inicio</a>
                    </li>
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

        <header class="panel-heading"> Lista de Clases de Productos </header>
        <header class="panel-heading">
            <div class="panel-body">
                <div align="right">
                    <button href="#add" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-primary tooltips" type="button" data-original-title="Nuevo Gasto"><span
                                class="fa fa-plus"></span> AGREGAR NUEVO TIPO DE PRODUCTO
                    </button>
                </div>
                <div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal" name="form2" action="RegistroTipoProducto.php"
                          method="post">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Registrar Nuevo Tipo de Producto</h3>
                                </div>

                                <div class="modal-body">
                                    <label class="col-sm-2 control-label"> Tipo de Producto</label>

                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" id="tipoProducto"
                                               name="tipoProducto" type="text"/>
                                    </div>

                                    <br><br><br><br>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><strong>Cerrar</strong>
                                    </button>
                                    <button name="nuevo_Tipo" type="submit" class="btn btn-primary">
                                        <strong>Registrar</strong></button>
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
                        <th> TIPO DE PRODUCTO</th>
                        <th> ACCIONES</th>
                    </tr>
                    </thead>
                    <?PHP
                    while ($tipoProducto = mysqli_fetch_array($tipoProductos)) {
                        ?>

                        <tr>
                            <td><?php echo $tipoProducto['tipoproducto']; ?></td>
                            <td>
                                <a href="#a<?php echo $tipoProducto[0]; ?>" role="button" class="btn btn-success"
                                   data-toggle="modal"><i class="icon_check_alt2"></i>
                                </a>
                                <button class="btn btn-danger" onclick="eliminarCliente(<?PHP echo $tipoProducto["0"]; ?>)"><i class="icon_close_alt2"></i></button>    
                            </td>
                        </tr>

                        <div id="a<?php echo $tipoProducto[0]; ?>" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <form class="form-validate form-horizontal" name="form2" action="RegistroTipoProducto.php"
                                  method="post">
                                <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                                <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                                <input type="hidden" name="idtipoproducto"
                                       value="<?php echo $tipoProducto['idtipoproducto']; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                            <h3 id="myModalLabel" align="center">Cambiar Informacion del tipo de
                                                producto</h3>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group ">
                                                <label for="proveedor"
                                                       class="control-label col-lg-2">Tipo de Producto:</label>

                                                <div class="col-lg-10">
                                                    <input class="form-control input-lg m-bot15"
                                                           id="tipoProducto"
                                                           name="tipoProducto" type="text"
                                                           value="<?php echo $tipoProducto['tipoproducto']; ?>"/>
                                                </div>

                                            </div>

                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                                <strong>Cerrar</strong></button>
                                            <button name="update_tipo" type="submit" class="btn btn-primary">
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

<?PHP include("LibraryJs.php"); ?>

<script>
    function eliminarUsuario(idborrar) {
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
                var url = '<?php echo $urlController ?>RegistroTipoProducto.php?idborrar='+id+'&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>'
                request.open('GET',url,true);
                var strData = '';
                request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                request.send(url);
                request.onreadystatechange = function() {
                    if(request.readyState == 4 && request.status == 200) {
                        window.location = '<?php echo $urlController ?>RegistroTipoProducto.php?idborrar='+id+'&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>'
                        //location.reload();
                    }
                }
            }
        })

       
    }

</script>


</body>
</html>