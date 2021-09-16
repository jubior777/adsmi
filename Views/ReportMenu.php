<header class="panel-heading">
    <div class="panel-body">
        <div align="right">
            <button href="#add" title="" data-placement="left" data-toggle="modal"
                    class="btn btn-primary tooltips" type="button"
                    data-original-title="Buscar Reporte por mes"><span
                        class="fa fa-plus"></span> BUSCAR POR MES
            </button>
            <button href="#add2" title="" data-placement="left" data-toggle="modal"
                    class="btn btn-primary tooltips" type="button"
                    data-original-title="Buscar Reporte ultomos 6 meses"><span
                        class="fa fa-plus"></span> REPORTE ULTIMOS 6 MESES
            </button>
            <button href="#add3" title="" data-placement="left" data-toggle="modal"
                    class="btn btn-primary tooltips" type="button"
                    data-original-title="Buscar Reporte por anio"><span
                        class="fa fa-plus"></span> REPORTE POR ANIO
            </button>
            <button onclick="window.print();" title="" data-placement="left" data-toggle="modal"
                    class="btn btn-primary tooltips" type="button"
                    data-original-title="Imprimir"><span
                        class="fa fa-plus"></span>IMPRIMIR
            </button>

        </div>


        <div id="add3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <form class="form-validate form-horizontal" name="form2" action="ReportePorAnio.php"
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
                                </select>
                            </div>
                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                <strong>Cerrar</strong>
                            </button>
                            <button name="nuevo_Pedido" type="submit" class="btn btn-primary">
                                <strong>Buscar</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <form class="form-validate form-horizontal" name="form2" action="ReporteMes.php"
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
                            <label class="col-sm-2 control-label"> Buscar Mes/Anio </label>
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
                                </select>
                            </div>

                            <br><br><br><br>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                <strong>Cerrar</strong>
                            </button>
                            <button name="nuevo_Pedido" type="submit" class="btn btn-primary">
                                <strong>Buscar</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div id="add2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <form class="form-validate form-horizontal" name="form2" action="ReporteUltimos6Mes.php"
                  method="GET">
                <input name="usuarioLogin" value="<?php echo $usuario; ?>" type="hidden">
                <input name="passwordLogin" value="<?php echo $password; ?>" type="hidden">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                            </button>
                            <h3 id="myModalLabel" align="center">Buscar Reporte de los ultimos 6 meses</h3>
                        </div>

                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                <strong>Cerrar</strong>
                            </button>
                            <button name="nuevo_Pedido" type="submit" class="btn btn-primary">
                                <strong>Buscar</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>
