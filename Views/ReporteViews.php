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
                    <li><i class="fa fa-truck"></i>Reporte de Ventas</li>
                </ol>
            </div>
        </div>
        <header class="panel-heading">
            <div class="panel-body">
                <div align="center">

                    <button href="#reporteDia" title="" data-toggle="modal" class="btn btn-danger tooltips"
                            type="button"
                            data-original-title="Buscar Reporte por dia" data-placement="left">
                        <span class="icon_datareport"></span> REPORTE DEL DIA
                    </button>

                    <button href="#rangoFecha" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Reporte por rango de fechas"><span
                                class="icon_datareport"></span> RANGO DE FECHAS
                    </button>

                    <button href="#ReportePorProducto" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Buscar Reporte por producto"><span
                                class="icon_datareport"></span> REPORTE POR PRODUCTO
                    </button>

                </div>

                <br>
                <div align="center">
                    <button href="#ReporteByMes" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Buscar Reporte por mes"><span
                                class="icon_datareport"></span> REPORTE POR MES
                    </button>
                    <button href="#utilidad" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Utilidad"><span
                                class="icon_datareport"></span> UTILIDAD
                    </button>
                    <button href="#Gastos" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Gstos de la emrpesa"><span
                                class="icon_datareport"></span> GASTOS DE LA EMPRESA
                    </button>
                </div>

                <br>


                <div align="center">
                    <button href="#ReporteAnual" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Buscar anual"><span
                                class="icon_datareport"></span> REPORTE ANUAL
                    </button>
                    <button href="#6meses" title="" data-placement="left" data-toggle="modal"
                            class="btn btn-danger tooltips" type="button"
                            data-original-title="Reporte por  los ultimos 6 meses"><span
                                class="icon_datareport"></span> REPORTE DE LOS ULTIMOS 6 MESES
                    </button>
                </div>


                <div id="reporteDia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal" target="_blank" name="form2" action="Reportes.php"
                          method="GET">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Mostrar Reporte del Dia</h3>
                                </div>

                                <div class="modal-body">
                                    <?php

                                    $fecha = date("d-m-Y");
                                    $fechaActual = date("d-m-Y", strtotime($fecha . "0 days"));
                                    echo 'Fecha Actual : <b> <span style="font-size: 172%; ">';
                                    echo $fechaActual;
                                    echo '</font></b>';
                                    ?>
                                    <input type="hidden" name="fechaVentas"
                                           value="<?PHP echo $fechaActual = date("Y-m-d", strtotime($fecha . "- 1 days")); ?>"><br><br>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        <strong>Cerrar</strong>
                                    </button>
                                    <button name="reporte_dia" type="submit" data-target="_blank"
                                            class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="rangoFecha" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal" target="_blank" name="form2" action="Reportes.php"
                          method="GET">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Mostrar Reporte Por Fecha</h3>
                                </div>

                                <div class="modal-body">
                                    <label for="responsable" class="control-label col-lg-2">Fecha de Inicio:</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" type="date"
                                               name="fechaInicialVentas" autocomplete="off" required
                                               value="<?php echo date('Y-m-d'); ?>"></div>
                                    <br><br><br>
                                    <br>

                                    <label for="responsable" class="control-label col-lg-2">Fecha de Fin:</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" type="date" name="fechaFinalVentas"
                                               autocomplete="off" required value="<?php echo date('Y-m-d'); ?>"></div>
                                    <br><br><br>
                                    <br>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        <strong>Cerrar</strong>
                                    </button>
                                    <button name="rango_fecha" type="submit" data-target="_blank"
                                            class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div id="ReportePorProducto" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal" target="_blank" name="form2" action="Reportes.php"
                          method="GET">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Mostrar Reporte Por Producto</h3>
                                </div>

                                <div class="modal-body">
                                    <label for="responsable" class="control-label col-lg-2">Fecha de Inicio:</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" type="date"
                                               name="fechaInicialVentas" autocomplete="off" required
                                               value="<?php echo date('Y-m-d'); ?>"></div>
                                    <br><br><br>
                                    <br>

                                    <label for="responsable" class="control-label col-lg-2">Fecha de Fin:</label>
                                    <div class="col-lg-10">
                                        <input class="form-control input-lg m-bot15" type="date" name="fechaFinalVentas"
                                               autocomplete="off" required value="<?php echo date('Y-m-d'); ?>"></div>
                                    <br><br><br>
                                    <br>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        <strong>Cerrar</strong>
                                    </button>
                                    <button name="reporte_producto" type="submit" data-target="_blank"
                                            class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


                <div id="ReporteByMes" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal" target="_blank" name="form2" action="Reportes.php"
                          method="GET">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Buscar Reporte por Mes</h3>
                                </div>

                                <div class="modal-body">
                                    <label class="col-sm-2 control-label"> Buscar Mes/Año </label>
                                    <div class="col-sm-4">

                                        <select class="form-control input-lg m-bot15"
                                                name="mes">
                                            <option value="01">ENERO</option>
                                            <option value="02">FEBRERO</option>
                                            <option value="03">MARZO</option>
                                            <option value="04">ABRIL</option>
                                            <option value="05">MAYO</option>
                                            <option value="06">JUNIO</option>
                                            <option value="07">JULIO</option>
                                            <option value="08">AGOSTO</option>
                                            <option value="09">SEPTIEMBRE</option>
                                            <option value="10">OCTUBRE</option>
                                            <option value="11">NOVIEMBRE</option>
                                            <option value="12">DICIEMBRE</option>
                                        </select>

                                    </div>

                                    <div class="col-sm-4">

                                        <select class="form-control input-lg m-bot15"
                                                name="anio">
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2018">2029</option>
                                            <option value="2019">2030</option>
                                            <option value="2020">2031</option>
                                        </select>
                                    </div>

                                    <br><br><br><br>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        <strong>Cerrar</strong>
                                    </button>
                                    <button name="reporte_mes" type="submit" class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div id="utilidad" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                    <h3 id="myModalLabel" align="center">Mostrar Utilidad de la empresa</h3>
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
                                    <button name="utilidad" type="submit" data-target="_blank" class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>

                        </div>
                    </form>
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


                <div id="ReporteAnual" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <form class="form-validate form-horizontal" target="_blank" name="form2" action="Reportes.php"
                          method="GET">
                        <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                        <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                    </button>
                                    <h3 id="myModalLabel" align="center">Buscar Reporte por Anio</h3>
                                </div>

                                <div class="modal-body">
                                    <label class="col-sm-2 control-label"> Buscar Anio </label>

                                    <div class="col-sm-8">

                                        <select class="form-control input-lg m-bot15"
                                                name="anio">
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2018">2029</option>
                                            <option value="2019">2030</option>
                                            <option value="2020">2031</option>
                                        </select>
                                    </div>

                                    <br><br><br><br>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        <strong>Cerrar</strong>
                                    </button>
                                    <button name="reporte_anual" type="submit" class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>



                <div id="6meses" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                                    <h3 id="myModalLabel" align="center">Mostrar Reporte de los ultimos 6 meses</h3>
                                </div>

                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        <strong>Cerrar</strong>
                                    </button>
                                    <button name="reporte_6meses" type="submit" data-target="_blank" class="btn btn-primary">
                                        <strong>Buscar</strong></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>



        </header>

        <div class="row">

            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <img src="<?php echo $urlViews; ?>/img/descargar.jpg" width="204" height="202">
                    </header>
                </section>
            </div>
        </div>


    </section>
</section>
<!--main content end-->

<?PHP include("LibraryJs.php"); ?>


</body>
</html>
