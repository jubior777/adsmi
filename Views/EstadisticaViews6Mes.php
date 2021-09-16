<?php
$con = new conexion();
$anio = date("Y");
$totalVentas = $con->getTotal6MonthVentas();
?>



<!DOCTYPE html>
<html lang="es">
<?php
include('head.php');
?>

<style type="text/css">

    .html, body {
        font-family: Verdana, Geneva, sans-serif;
        font-size: 12px;
    }

    .ejemplo {
        float: left;
        width: 100%;
        padding: 0px;
        margin: 0px;
    }

    .ejemplo img {
        float: left;
        padding: 2px;
        border: 1px solid #999;
        margin-right: 10px;
        margin-bottom: 10px;
    }

</style>
<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <?PHP include('logo.php'); ?>

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
<!--                        <input class="form-control" placeholder="Search" type="text">-->
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>
        <?PHP include('DropDown.php'); ?>
    </header>
    <?PHP include('menu.php'); ?>
    </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-bar-chart-o"></i><strong> ESTADISTICAS </strong></h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="principal.php">Inicio</a></li>
                        <li><i class="fa fa-bar-chart-o"></i><a href="#add">Buscar Otros Reportes</a></li>
                    </ol>
                </div>
            </div>

            <?PHP include('ReportMenu.php'); ?>

            <div class="row">

                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ventas por los ultimos 6 meses del Anio(<?php echo $anio; ?>)
                        </header>
                        <div class="panel-body">
                            <div id="chartdiv"></div>
                            <script src="<?php echo $urlViews; ?>/graphicsBase/core.js"></script>
                            <script src="<?php echo $urlViews; ?>/graphicsBase/charts.js"></script>
                            <script src="<?php echo $urlViews; ?>/graphicsBase/animated.js"></script>
                            <script>

                                am4core.useTheme(am4themes_animated);

                                var chart = am4core.create("chartdiv", am4charts.XYChart3D);


                                chart.data = [
                                    <?php

                                    while ($ventaTotalMensual = mysqli_fetch_array($totalVentas)) {

                                    ?>

                                    {
                                        "country": "<?php $enero = 'January';
                                            $febrero = 'February';
                                            $marzo = 'March';
                                            $abril = 'April';
                                            $mayo = 'May';
                                            $junio = 'June';
                                            $julio = 'July';
                                            $agosto = 'August';
                                            $septiembre = 'September';
                                            $octubre = 'October';
                                            $noviembre = 'November';
                                            $diciembre = 'December';
                                            if ($ventaTotalMensual['mes'] == $enero) echo 'Enero';
                                            if ($ventaTotalMensual['mes'] == $febrero) echo 'Febrero';
                                            if ($ventaTotalMensual['mes'] == $marzo) echo 'Marzo';
                                            if ($ventaTotalMensual['mes'] == $abril) echo 'Abril';
                                            if ($ventaTotalMensual['mes'] == $mayo) echo 'Mayo';
                                            if ($ventaTotalMensual['mes'] == $junio) echo 'Junio';
                                            if ($ventaTotalMensual['mes'] == $julio) echo 'Julio';
                                            if ($ventaTotalMensual['mes'] == $agosto) echo 'Agosto';
                                            if ($ventaTotalMensual['mes'] == $septiembre) echo 'Septiembre';
                                            if ($ventaTotalMensual['mes'] == $octubre) echo 'Octubre';
                                            if ($ventaTotalMensual['mes'] == $noviembre) echo 'Noviembre';
                                            if ($ventaTotalMensual['mes'] == $diciembre) echo 'Dicembre' ?>",
                                        "visits": <?php echo $ventaTotalMensual['total']; ?>
                                    },
                                    <?php } ?>
                                ];

                                var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                                categoryAxis.renderer.grid.template.location = 0;
                                categoryAxis.dataFields.category = "country";
                                categoryAxis.renderer.minGridDistance = 60;
                                categoryAxis.renderer.grid.template.disabled = true;
                                categoryAxis.renderer.baseGrid.disabled = true;
                                categoryAxis.renderer.labels.template.dy = 20;

                                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                                valueAxis.renderer.grid.template.disabled = true;
                                valueAxis.renderer.baseGrid.disabled = true;
                                valueAxis.renderer.labels.template.disabled = true;
                                valueAxis.renderer.minWidth = 0;

                                var series = chart.series.push(new am4charts.ConeSeries());
                                series.dataFields.categoryX = "country";
                                series.dataFields.valueY = "visits";
                                series.columns.template.tooltipText = "{valueY.value}";
                                series.columns.template.tooltipY = 0;
                                series.columns.template.strokeOpacity = 1;

                                // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
                                series.columns.template.adapter.add("fill", function (fill, target) {
                                    return chart.colors.getIndex(target.dataItem.index);
                                });

                                series.columns.template.adapter.add("stroke", function (stroke, target) {
                                    return chart.colors.getIndex(target.dataItem.index);
                                });

                            </script>

                        </div>

                    </section>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Tabla de Ventas Mensuales (<?php echo $anio; ?>)
                        </header>
                        <tbody>
                        <table class="table table-bordered">
                            <thead>
                            <tr class="success">
                                <th>MES</th>
                                <th>Total Vendido BS.</th>
                            </tr>
                            </thead>
                            <?php
                            while ($ventaTotalMensual = mysqli_fetch_array($totalVentasMensual)) {
                                ?>

                                <tr>

                                    <td><?php $enero = 'January';
                                        $febrero = 'February';
                                        $marzo = 'March';
                                        $abril = 'April';
                                        $mayo = 'May';
                                        $junio = 'June';
                                        $julio = 'July';
                                        $agosto = 'August';
                                        $septiembre = 'September';
                                        $octubre = 'October';
                                        $noviembre = 'November';
                                        $diciembre = 'December';
                                        if ($ventaTotalMensual['mes'] == $enero) echo 'Enero';
                                        if ($ventaTotalMensual['mes'] == $febrero) echo 'Febrero';
                                        if ($ventaTotalMensual['mes'] == $marzo) echo 'Marzo';
                                        if ($ventaTotalMensual['mes'] == $abril) echo 'Abril';
                                        if ($ventaTotalMensual['mes'] == $mayo) echo 'Mayo';
                                        if ($ventaTotalMensual['mes'] == $junio) echo 'Junio';
                                        if ($ventaTotalMensual['mes'] == $julio) echo 'Julio';
                                        if ($ventaTotalMensual['mes'] == $agosto) echo 'Agosto';
                                        if ($ventaTotalMensual['mes'] == $septiembre) echo 'Septiembre';
                                        if ($ventaTotalMensual['mes'] == $octubre) echo 'Octubre';
                                        if ($ventaTotalMensual['mes'] == $noviembre) echo 'Noviembre';
                                        if ($ventaTotalMensual['mes'] == $diciembre) echo 'Dicembre' ?></td>
                                    <td><?php echo $ventaTotalMensual['total']; ?></td>

                                </tr>

                            <?php } ?>

                            </tbody>
                        </table>
                    </section>
                </div>

            </div>


        </section>
    </section>
    <!--main content end-->
</section>

<?PHP include ('LibraryJs.php'); ?>


</body>
</html>