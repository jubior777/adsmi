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
                    <?PHP include('MenuOpcionesConfiguracion.php'); ?>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <section class="panel">
                        <header class="panel-heading"> Datos Factura</header>
                        <header class="panel-heading">
                            <div class="panel-body">
                        </header>

                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th><i class="fa fa-magic"></i> PAIS</th>
                                        <th><i class="fa fa-money"></i> MONEDA</th>
                                        <th><i class="fa fa-money"></i> CONTEXTO</th>
                                        <th><i class="icon_cog"></i> ACCIONES</th>
                                    </tr>
                                    </thead>
                                    <?PHP
                                    while ($datosUsuarioMoneda = mysqli_fetch_array($dataMoneda)) {
                                        ?>

                                        <tr>
                                            <td> <?PHP echo $datosUsuarioMoneda['pais']; ?></td>
                                            <td> <?PHP echo $datosUsuarioMoneda['contexto']; ?></td>
                                            <td> <?PHP echo $datosUsuarioMoneda['tipoMoneda']; ?></td>
                                            <td>
                                                <a href="#a<?php echo $datosUsuarioMoneda[0]; ?>" role="button"
                                                   class="btn btn-success" data-toggle="modal">
                                                    <i class="icon_check_alt2"></i> </a>
                                                </a>
                                            </td>
                                        </tr>

                                        <div id="a<?php echo $datosUsuarioMoneda[0]; ?>" class="modal fade"
                                             tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <form class="form-validate form-horizontal" name="form2"
                                                  action="RegistrosDataMoneda.php" method="post">
                                                <input name="usuarioLogin" value="<?php echo $usuario; ?>"
                                                       type="hidden">
                                                <input name="passwordLogin" value="<?php echo $password; ?>"
                                                       type="hidden">
                                                <input type="hidden" name="idMoneda"
                                                       value="<?php echo $datosUsuarioMoneda['idMoneda']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                            <h3 id="myModalLabel" align="center">Elegir Moneda</h3>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group ">
                                                                <label for="propietario" class="control-label col-lg-2">MONEDA:</label>
                                                                <div class="col-lg-10">
                                                                   <select class="form-control input-lg m-bot15" name="moneda">
                                                                       <option value="Colombia"> Colombia </option>
                                                                       <option value="EUA"> EUA </option>
                                                                       <option value="Bolivia"> Bolivia </option>
                                                                       <option value="Ecuador"> Ecuador </option>
                                                                       <option value="Peru"> Peru </option>
                                                                       <option value="Brasil"> Brasil </option>
                                                                       <option value="Chile"> Chile </option>
                                                                       <option value="Venezuela"> Venezuela </option>
                                                                       <option value="Mexico"> Mexico </option>
                                                                       <option value="Argentina"> Argentina </option>
                                                                       <option value="Paraguay"> Paraguay </option>
                                                                       <option value="Uruguay"> Uruguay </option>
                                                                   </select>

                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button class="btn btn-default" data-dismiss="modal"
                                                                        aria-hidden="true"><strong>Cerrar</strong>
                                                                </button>
                                                                <button name="update_data_moneda" type="submit"
                                                                        class="btn btn-primary"><strong>Actualizar
                                                                        Moneda</strong></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    <?PHP } ?>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <!-- statics end -->

    </section>
</section>
<!--main content end-->

<?PHP include('LibraryJs.php'); ?>


</body>
</html>