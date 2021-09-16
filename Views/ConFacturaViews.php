<!DOCTYPE html>
<html lang="es">
<?PHP
include('LiteralMoney.php');
?>


                        <table align="left" bgcolor="#ffffff" class="breadcrumb">

                            <tbody>
                            <tr>
                                <td colspan="6" align="Center">
                                    <span style="color: #2b2b2b;">
                                    <?PHP
                                    echo '
                                    <span style="font-size: x-large; "> <div style="text-align: center;"> <strong>'.$razonSocial.'</strong>  </div></span>';
                                    echo '<div style="text-align: center;">De: '.$propietario.' </div> ';
                                    echo '<div style="text-align: center;">Casa Matriz: '.$direccion.'</div> ';
                                    echo '<div style="text-align: center;">   N&ordm; '.$nro.' - Telefono : '.$telefono.'  </div> ';
                                    echo '<div style="text-align: center;">  Bogota</div> ';
                                    echo '<div style="text-align: center;">  FACTURA ORIGINAL</div> ';
                                    echo '----------------------------------------------------------------------------------------';
                                    echo '<br>';
                                    ?>
                                   </span>
                                </td>
                            </tr>

                            <tr>

                                <td colspan="3"><span style="color: #2b2b2b;"><b>NIT : </b></span></td>
                                <td colspan="3"><span style="color: #2b2b2b;"><?PHP echo $nit?></span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><span style="color: #2b2b2b;"><b>N&ordm; FACTURA : </b></span></td>
                                <td colspan="3"><span style="color: #2b2b2b;"><?PHP echo $factura?></span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><span style="color: #2b2b2b;"><b>N&ordm; AUTORIZACION : </b></span></td>
                                <td colspan="3"><span style="color: #2b2b2b;"><?PHP echo $autorizacion?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6" align="center"><span style="color: #2b2b2b;"> Otros servicios de comidas</span></td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                <span style="color: #2b2b2b;">    ----------------------------------------------------------------------------------------</span>
                                </td>
                            </tr>


                            <tr>

                                <td colspan="6"><span style="color: #2b2b2b;"><b>Fecha de Venta : </b> <?PHP echo $fecha; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Nit/CC : </b> <?PHP echo $cc; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Se&ntilde;or(es): </b> <?PHP echo $nombreCliente; ?></span></td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                <span style="color: #2b2b2b;">    ----------------------------------------------------------------------------------------</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"></td>
                                <td width="40"><span style="color: #2b2b2b;"><b>Cant.</b></span></td>
                                <td width="100"><span style="color: #2b2b2b;"><b>Descripcion</b></span></td>
                                <td width="70"><span style="color: #2b2b2b;"><b>Precio</b></span></td>
                                <td width="70"><span style="color: #2b2b2b;"><b>Total</b></span></td>
                                <td width="70"><span style="color: #2b2b2b;"><b>Tipo</b></span></td>
                            </tr>
                            <?PHP
                            for ($i=0; $i<$pedido; $i++){
                                echo '<tr>';
                                $detallePedido = mysqli_fetch_array($pedidoTotalPreventa);
                                echo '<td>'.'</td>';
                                echo '<td width="40"><span style="color: #2b2b2b;">'.$detallePedido['cantidad'].'</span></td>';
                                echo '<td width="100"><span style="color: #2b2b2b;">'.$detallePedido['producto'].'</span></td>';
                                echo '<td width="70"><span style="color: #2b2b2b;">'.$detallePedido['precio'].'</span></td>';
                                echo '<td width="70"><span style="color: #2b2b2b;">'.$detallePedido['precio']*$detallePedido['cantidad'].'</span></td>';
                                echo '<td width="70"><span style="color: #2b2b2b;">'.$detallePedido['tipo'].'</span></td>';
                                echo '</tr>';
                              }


                            ?>

                            <tr>

                                <td colspan="6" align="center">
                                  <span style="color: #2b2b2b;">  ----------------------------------------------------------------------------------------</span>
                                </td>
                            </tr>

                            <tr>

                                <td colspan="6"><span style="color: #2b2b2b;"><b>Total a Pagar : <?PHP echo $tipoMoneda; ?>  </b> <?PHP echo $totalAPagar; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Efectivo : <?PHP echo $tipoMoneda; ?> </b> <?PHP echo $efectivo; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Cambio : <?PHP echo $tipoMoneda; ?> </b> <?PHP echo $cambio; ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="6">&nbsp;<span style="color: #2b2b2b;"> <b>Son : </b>
                                <?PHP
                                 $literalMoney = new  EnLetras();
                                  $shoLiteralMoney = strtoupper($literalMoney -> valorEnletras($totalAPagar,$contextMoneda));
                                  echo "<b>".$shoLiteralMoney."</b>";
                                  ?>
                                      </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Codigo de control : <?PHP echo $getCodigoControl; ?></b></span></td>
                            </tr>

                            <tr>
                                <td colspan="6"><span style="color: #2b2b2b;"><b>Fecha Limite de Emision :  <?PHP echo $fechaLimiteEmision; ?></b></span></td>
                            </tr>


                            <tr>
                                <td colspan="6" align="center"><b>
                                    <?PHP  include ("Qr.php"); ?>
                                    </b></td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                  <span style="color: #2b2b2b;">  ----------------------------------------------------------------------------------------</span>
                                </td>
                            </tr>


                            <tr>
                                <td colspan="6" align="center"><span style="color: #2b2b2b;"> " Esta factura contribuye al desarrollo del pais el uso
                                    ilicito de esta sera sancionado de acuerdo a ley "</span>
                                </td>
                            </tr>

                            <tr>

                                <td colspan="6" align="center">
                                 <span style="color: #2b2b2b;">   ----------------------------------------------------------------------------------------</span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4">
                                  <span style="color: #2b2b2b;">  Atendido por : <strong><?PHP echo $userLogueado;?> </strong></span>
                                </td>

                                <td colspan="2">
                                    <span style="color: #2b2b2b;">  FICHA NRO :<strong> <?PHP echo  $ficha; ?> </strong> </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>


</body>
</html>