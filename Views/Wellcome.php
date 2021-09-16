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
      <?PHP include ('DropDown.php'); ?>
    </header>
 <?PHP include ('Menu.php')?>

</section>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> PRINCIPAL</h3>
                <ol class="breadcrumb">
                <li><i class="fa fa-laptop"></i> Principal</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-truck"></i>
                    <div class="count"><?PHP
                        // echo $t_pro;

                        ?></div>
                    <div class="title"> Proveedores</div>
                </div><!--/.info-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="icon_piechart"></i>
                    <div class="count"><span style="font-size: xx-small; "><?PHP
                            //echo $ventastotales;
                            ?> </span>
                    </div>
                    <div class="title"> Reportes de Ventas </div>
                </div><!--/.info-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-money"></i>
                    <div class="count"><?PHP
                        //echo $gastototales;
                        ?>$us.
                    </div>
                    <div class="title">Gastos y Entradas</div>
                </div><!--/.info-box-->
            </div><!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fa fa-cubes"></i>
                    <div class="count"><?PHP
                        //echo $totalProducto;
                        ?></div>
                    <div class="title">Stock de los productos</div>
                </div><!--/.info-box-->
            </div><!--/.col-->

        </div><!--/.row-->

        <div class="row">

            <div class="col-lg-9 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><i class="fa fa-flag-o red"></i><strong>Venta Total del  Dia</strong></h2>

                    </div>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>

                                    <th>PRODUCTO</th>
                                    <th>CANTIDAD</th>
                                    <th>PRECIO</th>
                                    <th>TOTAL VENDIDO</th>
                                    <th>FECHA</th>
                                </tr>
                                </thead>
                                <?PHP
                                while ($ventas = mysqli_fetch_array($totalVentas)) {
                                ?>

                                <tr>

                                    <td> <?PHP echo $ventas['producto']; ?></td>
                                    <td> <?PHP echo $ventas['cantidad']; ?></td>
                                    <td> <?PHP echo $ventas['precio']; ?></td>
                                    <td> <?PHP echo $ventas['totalVendido']; ?></td>
                                    <td> <?PHP echo $ventas['fechaVenta']; ?></td>

                                </tr>
                                <?php } ?>

                            </table>
                        </div>
                    </div>

                </div>

            </div><!--/col-->
            <div class="col-md-3">

                <!-- Calendario -->
                <div style="text-align: center;"><h3>Calendario</h3></div>
                <div id="calendar" class="mb">
                    <div class="panel green-panel no-margin">
                        <div class="panel-body">
                            <div id="date-popover" class="popover top"
                                 style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                <div class="arrow"></div>
                                <h3 class="popover-title" style="disadding: none;"></h3>
                                <div id="date-popover-content" class="popover-content"></div>
                            </div>
                            <div id="my-calendar"></div>
                        </div>
                    </div>
                </div>
                <!-- Fin de calendar -->
                <!----- CALENDARIO ---->
                <div class="col1of2">
                    <div class="datepicker-placeholder"></div>
                </div>
                <!----- FIN CALENDARIO ---->

            </div>

            <!-- statics end -->

    </section>
</section>
<!--main content end-->





<?PHP include ('LibraryJs.php'); ?>
</body>
</html>