<?php
$con = new conexion();
$anio = date("Y");
$totalVentas = $con->getTotalByMonthVentas($mes,$anio);
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
                                Ventas Por Mes  de <?php
                                if ($mes == '01') echo 'Enero';
                                if ($mes == '02') echo 'Febrero';
                                if ($mes == '03') echo 'Marzo';
                                if ($mes == '04') echo 'Abril';
                                if ($mes == '05') echo 'Mayo';
                                if ($mes == '06') echo 'Junio';
                                if ($mes == '07') echo 'Julio';
                                if ($mes == '08') echo 'Agosto';
                                if ($mes == '09') echo 'Septiembre';
                                if ($mes == '10') echo 'Octubre';
                                if ($mes == '11') echo 'Noviembre';
                                if ($mes == '12') echo 'Diciembre';

                                  ?> de anio  (<?php echo $anio; ?>)
                            </header>
                            <div class="panel-body">
                                <div id="chartdiv"></div>
                                <script src="<?php echo $urlViews; ?>/graphicsBase/core.js"></script>
                                <script src="<?php echo $urlViews; ?>/graphicsBase/charts.js"></script>
                                <script src="<?php echo $urlViews; ?>/graphicsBase/animated.js"></script>
                                <script >

                                    am4core.useTheme(am4themes_animated);

                                    var chart = am4core.create("chartdiv", am4charts.XYChart3D);



                                    chart.data = [
                                        <?php

                                        while ($ventaTotalMensual = mysqli_fetch_array($totalVentas)) {

                                        ?>

                                        {
                                            "country":"<?php
                                                $dia1 = '1';
                                                $dia2 = '2';
                                                $dia3 = '3';
                                                $dia4 = '4';
                                                $dia5 = '5';
                                                $dia6 = '6';
                                                $dia7 = '7';
                                                $dia8 = '8';
                                                $dia9 = '9';
                                                $dia10 = '10';
                                                $dia11 = '11';
                                                $dia12 = '12';
                                                $dia13 = '13';
                                                $dia14 = '14';
                                                $dia15 = '15';
                                                $dia16 = '16';
                                                $dia17 = '17';
                                                $dia18 = '18';
                                                $dia19 = '19';
                                                $dia20 = '20';
                                                $dia21 = '21';
                                                $dia22 = '22';
                                                $dia23 = '23';
                                                $dia24 = '24';
                                                $dia25 = '25';
                                                $dia26 = '26';
                                                $dia27 = '27';
                                                $dia28 = '28';
                                                $dia29 = '29';
                                                $dia30 = '30';
                                                $dia31 = '31';
                                                if ($ventaTotalMensual['dia'] == $dia1) echo '01';
                                                if ($ventaTotalMensual['dia'] == $dia2) echo '02';
                                                if ($ventaTotalMensual['dia'] == $dia3) echo '03';
                                                if ($ventaTotalMensual['dia'] == $dia4) echo '04';
                                                if ($ventaTotalMensual['dia'] == $dia5) echo '05';
                                                if ($ventaTotalMensual['dia'] == $dia6) echo '06';
                                                if ($ventaTotalMensual['dia'] == $dia7) echo '07';
                                                if ($ventaTotalMensual['dia'] == $dia8) echo '08';
                                                if ($ventaTotalMensual['dia'] == $dia9) echo '09';
                                                if ($ventaTotalMensual['dia'] == $dia10) echo '10';
                                                if ($ventaTotalMensual['dia'] == $dia11) echo '11';
                                                if ($ventaTotalMensual['dia'] == $dia12) echo '12';
                                                if ($ventaTotalMensual['dia'] == $dia13) echo '13';
                                                if ($ventaTotalMensual['dia'] == $dia14) echo '14';
                                                if ($ventaTotalMensual['dia'] == $dia15) echo '15';
                                                if ($ventaTotalMensual['dia'] == $dia16) echo '16';
                                                if ($ventaTotalMensual['dia'] == $dia17) echo '17';
                                                if ($ventaTotalMensual['dia'] == $dia18) echo '18';
                                                if ($ventaTotalMensual['dia'] == $dia19) echo '19';
                                                if ($ventaTotalMensual['dia'] == $dia20) echo '20';
                                                if ($ventaTotalMensual['dia'] == $dia21) echo '21';
                                                if ($ventaTotalMensual['dia'] == $dia22) echo '22';
                                                if ($ventaTotalMensual['dia'] == $dia23) echo '23';
                                                if ($ventaTotalMensual['dia'] == $dia24) echo '24';
                                                if ($ventaTotalMensual['dia'] == $dia25) echo '25';
                                                if ($ventaTotalMensual['dia'] == $dia26) echo '26';
                                                if ($ventaTotalMensual['dia'] == $dia27) echo '27';
                                                if ($ventaTotalMensual['dia'] == $dia28) echo '28';
                                                if ($ventaTotalMensual['dia'] == $dia29) echo '29';
                                                if ($ventaTotalMensual['dia'] == $dia30) echo '30';
                                                if ($ventaTotalMensual['dia'] == $dia31) echo '31'

                                                ?>",
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
                                <th>Dia del MES</th>
                                <th>Total Vendido BS.</th>
                            </tr>
                            </thead>
                            <?php
                            while ($ventaTotalMensual = mysqli_fetch_array($totalVentasMensual)) {
                                ?>

                                <tr>

                                    <td><?php
                                        $dia1 = '1';
                                        $dia2 = '2';
                                        $dia3 = '3';
                                        $dia4 = '4';
                                        $dia5 = '5';
                                        $dia6 = '6';
                                        $dia7 = '7';
                                        $dia8 = '8';
                                        $dia9 = '9';
                                        $dia10 = '10';
                                        $dia11 = '11';
                                        $dia12 = '12';
                                        $dia13 = '13';
                                        $dia14 = '14';
                                        $dia15 = '15';
                                        $dia16 = '16';
                                        $dia17 = '17';
                                        $dia18 = '18';
                                        $dia19 = '19';
                                        $dia20 = '20';
                                        $dia21 = '21';
                                        $dia22 = '22';
                                        $dia23 = '23';
                                        $dia24 = '24';
                                        $dia25 = '25';
                                        $dia26 = '26';
                                        $dia27 = '27';
                                        $dia28 = '28';
                                        $dia29 = '29';
                                        $dia30 = '30';
                                        $dia31 = '31';
                                        if ($ventaTotalMensual['dia'] == $dia1) echo '01';
                                        if ($ventaTotalMensual['dia'] == $dia2) echo '02';
                                        if ($ventaTotalMensual['dia'] == $dia3) echo '03';
                                        if ($ventaTotalMensual['dia'] == $dia4) echo '04';
                                        if ($ventaTotalMensual['dia'] == $dia5) echo '05';
                                        if ($ventaTotalMensual['dia'] == $dia6) echo '06';
                                        if ($ventaTotalMensual['dia'] == $dia7) echo '07';
                                        if ($ventaTotalMensual['dia'] == $dia8) echo '08';
                                        if ($ventaTotalMensual['dia'] == $dia9) echo '09';
                                        if ($ventaTotalMensual['dia'] == $dia10) echo '10';
                                        if ($ventaTotalMensual['dia'] == $dia11) echo '11';
                                        if ($ventaTotalMensual['dia'] == $dia12) echo '12';
                                        if ($ventaTotalMensual['dia'] == $dia13) echo '13';
                                        if ($ventaTotalMensual['dia'] == $dia14) echo '14';
                                        if ($ventaTotalMensual['dia'] == $dia15) echo '15';
                                        if ($ventaTotalMensual['dia'] == $dia16) echo '16';
                                        if ($ventaTotalMensual['dia'] == $dia17) echo '17';
                                        if ($ventaTotalMensual['dia'] == $dia18) echo '18';
                                        if ($ventaTotalMensual['dia'] == $dia19) echo '19';
                                        if ($ventaTotalMensual['dia'] == $dia20) echo '20';
                                        if ($ventaTotalMensual['dia'] == $dia21) echo '21';
                                        if ($ventaTotalMensual['dia'] == $dia22) echo '22';
                                        if ($ventaTotalMensual['dia'] == $dia23) echo '23';
                                        if ($ventaTotalMensual['dia'] == $dia24) echo '24';
                                        if ($ventaTotalMensual['dia'] == $dia25) echo '25';
                                        if ($ventaTotalMensual['dia'] == $dia26) echo '26';
                                        if ($ventaTotalMensual['dia'] == $dia27) echo '27';
                                        if ($ventaTotalMensual['dia'] == $dia28) echo '28';
                                        if ($ventaTotalMensual['dia'] == $dia29) echo '29';
                                        if ($ventaTotalMensual['dia'] == $dia30) echo '30';
                                        if ($ventaTotalMensual['dia'] == $dia31) echo '31'

                                        ?></td>
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