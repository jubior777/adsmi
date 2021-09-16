<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <form class="form-validate form-horizontal" name="calculadora" action="RegistrarPreventa.php" method="post">
                <table id="dataTables-example">
                    <input type="hidden" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
                    <input type="hidden" id="password" name="password" value="<?php echo $password; ?>">

                    <tr>
                        <th colspan="5" align="Center"> REGISTRAR</th>
                        <th>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                NIT / CC :
                            </label>
                        </td>
                        <td colspan="7">
                            <div class="col-lg-10">
                                <input class="form-control input-lg m-bot15" type="text" required name="cc" autocomplete="off"  onkeyup="myFunctionSearch()" id="searchNit"  >
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                NOMBRE:
                            </label>
                        </td>
                        <td colspan="7">
                            <div class="col-lg-">
                                <div  class="textbox2" size="25" readonly name="nombreCliente" id="myDiv"></div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><label>TOTAL A PAGAR:</label></td>
                        <td>
                            <div class="col-lg-20">
                                <input class="form-control input-lg m-bot15" type="text" required name="ingreso1"
                                       readonly value="<?PHP echo $preventa; ?>" onKeyUp="Suma()">

                            </div>
                        </td>


                        <td><label>EFECTIVO:</label></td>
                        <td>
                            <div class="col-lg-20">
                                <input class="form-control input-lg m-bot15" type="text" required name="ingreso2"
                                       value="" onKeyUp="Suma()">

                            </div>
                        </td>


                        <td><label>CAMBIO:</label></td>
                        <td>
                            <div class="col-lg-20">
                                <input class="form-control input-lg m-bot15" type="text" required name="resultado"
                                       readonly onKeyUp="Suma()">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td colspan="1">
                            <button name="registrar" type="submit" class="btn btn-success"> ACEPTAR</button>
                        </td>
                    </tr>


                </table>
            </form>

        </div>
    </div>
</div>


<script>

    document.calculadora.registrar.disabled=true;

    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    function myFunctionSearch() {

        var clientSearch = document.getElementById('searchNit').value;

        if (clientSearch == '') {

            document.getElementById("myDiv").innerHTML = "";
            document.getElementById("myDiv").style.border = "0px";
            document.getElementById("pers").innerHTML = "";
            return;
        }

        loadDoc("nitClient=" + clientSearch, "SearchContact.php", function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
                document.getElementById("myDiv").style.border = "1px solid #A5ACB2";

            }

        });
    }


    function Suma() {

        var ingreso1 = document.calculadora.ingreso1.value;
        var ingreso2 = document.calculadora.ingreso2.value;

        try {
            ingreso1 = (isNaN(parseFloat(ingreso1))) ? 0 : parseFloat(ingreso1);
            ingreso2 = (isNaN(parseFloat(ingreso2))) ? 0 : parseFloat(ingreso2);
            document.calculadora.resultado.value = ingreso2 - ingreso1;

            if ((ingreso2 - ingreso1) >= 0) {
                document.calculadora.registrar.disabled = false;
            }

            if((ingreso2 == "") || (document.calculadora.resultado.value < 0) ){
                document.calculadora.registrar.disabled=true;
            }
        } catch (e) {

        }

    }

</script>
