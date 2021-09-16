
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
                   <li><i class="fa fa-truck"></i>GASTOS POR LA EMPRESA</li>
                </ol>
            </div>
        </div>

        <header class="panel-heading"> Lista de Gastos </header>
        <header class="panel-heading">
            <div class="panel-body">
                <div align="right">

                    <button href="#Gastos" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Buscar Reporte por anio"><span
                                class="icon_datareport"></span>  EXPORTAR PDF
                    </button>


                    <button href="#add" title="" data-placement="top" data-toggle="modal"
                            class="btn btn-primary tooltips" type="button" data-original-title="Nuevo Producto">
                        <span class="icon_bag_alt"></span>AGREGAR NUEVO GASTO
                    </button>
                </div>


                <div id="Gastos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal"  target="_blank" name="form2" action="Reportes.php"
                          method="GET">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Mostrar Gastos de la empresa</h3>
                                </div>

                                <div class="modal-body">
                                    <label for="responsable" class="control-label col-lg-2">Fecha de Inicio:</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" type="date"  name="fechaInicialVentas" autocomplete="off" required value="<?php echo date('Y-m-d'); ?>"></div>
                                    <br><br><br>
                                    <br>

                                    <label for="responsable" class="control-label col-lg-2">Fecha de Fin:</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" type="date"  name="fechaFinalVentas" autocomplete="off" required value="<?php echo date('Y-m-d'); ?>"></div>
                                    <br><br><br>
                                    <br>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        <strong>Cerrar</strong>
                                    </button>
                                    <button name="gastos" type="submit" data-target="_blank" class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


                <div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal" name="form2" action="RegistroCuenta.php"
                          method="post">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Registrar Nueva Cuenta</h3>
                                </div>

                                <div class="modal-body">
                                    <label class="col-sm-2 control-label"> Tipo de Gasto :</label>
                                    <div class="col-sm-4">
                                        <select class="form-control input-lg m-bot15" name="tipo">
                                            <option value="Entrada">Entrada</option>
                                            <option value="Salida">Salida</option>
                                        </select>
                                    </div>
                                    <br><br><br>
                                    <label for="descripcion" class="control-label col-lg-2">Detalle :</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" id="descripcion"
                                               name="descripcion"
                                               minlength="3" type="text" required/>
                                    </div>
                                    <br><br><br>
                                    <label for="total" class="control-label col-lg-2">Total :</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" id="total" name="total"
                                               type="text" required/>
                                    </div>
                                    <br><br>
                                    <label for="fecha" class="control-label col-lg-2"> Fecha:</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" type="date"
                                               name="fechaRegistro" autocomplete="off" required
                                               value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                    <br><br><br><br>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><strong>Cerrar</strong>
                                    </button>
                                    <button name="nuevo_Cuenta" type="submit" class="btn btn-primary">
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
                        <th><i class="icon_calendar"></i> FECHA</th>
                        <th><i class="icon_briefcase_alt"></i> DETALLE</th>
                        <th><i class="icon_profile"></i> TIPO</th>
                        <th><i class="icon_profile"></i> ENTRADA</th>
                        <th><i class="icon_contacts_alt"></i> SALIDA</th>
                        <th><i class="icon_contacts_alt"></i> REGISTRO POR</th>
                        <th><i class="icon_cog"></i> ACCIONES</th>

                    </tr>
                    </thead>
                    <?PHP
                    while ($gastos = mysqli_fetch_array($allGastos)) {
                        ?>

                        <tr>
                            <td> <?PHP echo $gastos['fechaRegistro']; ?></td>
                            <td> <?PHP echo $gastos['descripcion']; ?></td>
                            <td> <?PHP echo $gastos['tipo']; ?></td>
                            <td> <?PHP echo $gastos['entrada']; ?></td>
                            <td> <?PHP echo $gastos['salida']; ?></td>
                            <td> <?PHP echo $gastos['usuario']; ?></td>

                            <td>
                                <a href="#a<?php echo $gastos[0]; ?>" role="button" class="btn btn-success"
                                   data-toggle="modal"><i class="icon_check_alt2"></i>
                                </a>
                                <button class="btn btn-danger" onclick="eliminarCliente(<?PHP echo $gastos["0"]; ?>)"><i class="icon_close_alt2"></i></button>
                            </td>
                        </tr>

                        <div id="a<?php echo $gastos[0]; ?>" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <form class="form-validate form-horizontal" name="form2" action="RegistroCuenta.php"
                                  method="post">
                                <input name="usuarioLogin" value="<?php echo $usuario;?>" type="hidden" >
                                <input name="passwordLogin" value="<?php echo $password;?>" type="hidden" >
                                <input type="hidden" name="idgastos"
                                       value="<?php echo $gastos['idgastos']; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                            <h3 id="myModalLabel" align="center">Cambiar Informacion de las Cuentas</h3>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group ">
                                                <label for="proveedor"
                                                       class="control-label col-lg-2">Tipo:</label>
                                                <div class="col-lg-10">

                                                    <select class="form-control input-lg m-bot15" name="tipo">
                                                        <?php
                                                        if ($gastos['tipo'] == "E"){  ?>
                                                            <option value="<?php echo $gastos['tipo']; ?>">Entrada</option>
                                                            <option value="S">Salida</option>
                                                        <?php  }  ?>
                                                        <?php  if ($gastos['tipo'] == "S"){  ?>
                                                            <option value="<?php echo $gastos['tipo']; ?>">Salida</option>
                                                            <option value="E">Entrada</option>
                                                        <?php  }  ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="responsable"
                                                       class="control-label col-lg-2">Detalle:</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control input-lg m-bot15" type="text"
                                                           name="descripcion"
                                                           value="<?php echo $gastos['descripcion']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="direccion"
                                                       class="control-label col-lg-2">Total:</label>
                                                <div class="col-lg-10">
                                                    <?php
                                                    if ($gastos['tipo'] == "E"){  ?>
                                                        <input class="form-control input-lg m-bot15" type="text"  name="total"  value="<?php echo $gastos['entrada']; ?>">
                                                    <?php  }  ?>
                                                    <?php  if ($gastos['tipo'] == "S"){  ?>
                                                        <input class="form-control input-lg m-bot15" type="text"  name="total"  value="<?php echo $gastos['salida']; ?>">
                                                    <?php  }  ?>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label for="fechaRegistro"
                                                       class="control-label col-lg-2">Fecha:</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control input-lg m-bot15" type="date"
                                                           name="fechaRegistro"
                                                           value="<?php echo $gastos['fechaRegistro']; ?>">

                                                </div>
                                            </div>
                                        </div>

                                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        <div class="modal-footer">
                                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                                <strong>Cerrar</strong></button>
                                            <button name="update" type="submit" class="btn btn-primary"><strong>Editar</strong>
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
    function eliminarCliente(idborrar) {
        var id = idborrar;

            Swal.fire({
            title: "Eliminar Cuenta",
            text: "Realmente desea eliminar la cuenta?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
        }).then((result) =>{
            if (result.isConfirmed) {
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var url = '<?php echo $urlController ?>RegistroCuenta.php?idborrar='+id+'&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>'
                request.open('GET',url,true);
                var strData = '';
                request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                request.send(url);
                request.onreadystatechange = function() {
                    if(request.readyState == 4 && request.status == 200) {
                        window.location = '<?php echo $urlController ?>RegistroCuenta.php?idborrar='+id+'&usuarioLogin=<?PHP echo $usuario; ?>&passwordLogin=<?PHP echo $password; ?>'
                        //location.reload();
                    }
                }
            }
        })
       
    }
</script>

</body>
</html>