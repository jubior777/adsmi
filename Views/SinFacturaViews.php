<!DOCTYPE html>
<html lang="es">
<?PHP
include('LiteralMoney.php');
?>


<table align="left" bgcolor="#ffffff" class="breadcrumb">

    <tbody>


    <tr>

        <td colspan="6" align="center">
            <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
        </td>
    </tr>

<tr>
    <td colspan="6" align="center">
        <span style="color: #2b2b2b;"><p style="font-size:25px">  FICHA NRO : <strong> <?PHP echo  $ficha; ?> </strong> </span>
    </td>
</tr>


    <tr>

        <td colspan="6"><span style="color: #2b2b2b;"><b>Fecha de Venta : </b> <?PHP echo $fecha; ?></span></td>
    </tr>
    <tr>
        <td colspan="6"><span style="color: #2b2b2b;"><b>Nit/CC : </b> <?PHP echo $cc; ?></span></td>
    </tr>
    <tr>
        <td colspan="6"><span style="color: #2b2b2b;"><b>Se&ntilde;or(es): </b> <?PHP echo $nombreCliente; ?></span>
        </td>
    </tr>

    <tr>

        <td colspan="6" align="center">
            <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
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
    for ($i = 0; $i < $pedido; $i++) {
        echo '<tr>';
        $detallePedido = mysqli_fetch_array($pedidoTotalPreventa);
        echo '<td>' . '</td>';
        echo '<td width="40"><span style="color: #2b2b2b;">' . $detallePedido['cantidad'] . '</span></td>';
        echo '<td width="100"><span style="color: #2b2b2b;">' . $detallePedido['producto'] . '</span></td>';
        echo '<td width="70"><span style="color: #2b2b2b;">' . $detallePedido['precio'] . '</span></td>';
        echo '<td width="70"><span style="color: #2b2b2b;">' . $detallePedido['precio'] * $detallePedido['cantidad'] . '</span></td>';
        echo '<td width="70"><span style="color: #2b2b2b;">' . $detallePedido['tipo'] . '</span></td>';
        echo '</tr>';
    }


    ?>

    <tr>

        <td colspan="6" align="center">
            <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
        </td>
    </tr>

    <tr>

        <td colspan="6"><span
                    style="color: #2b2b2b;"><b>Total a Pagar : <?PHP echo $tipoMoneda; ?>  </b> <?PHP echo $totalAPagar; ?></span>
        </td>
    </tr>
    <tr>
        <td colspan="6"><span
                    style="color: #2b2b2b;"><b>Efectivo : <?PHP echo $tipoMoneda; ?> </b> <?PHP echo $efectivo; ?></span>
        </td>
    </tr>
    <tr>
        <td colspan="6"><span style="color: #2b2b2b;"><b>Cambio : <?PHP echo $tipoMoneda; ?> </b> <?PHP echo $cambio; ?></span>
        </td>
    </tr>
    <tr>
        <td colspan="6">&nbsp;<span style="color: #2b2b2b;"> <b>Son : </b>
                                <?PHP
                                $literalMoney = new  EnLetras();
                                $shoLiteralMoney = strtoupper($literalMoney->valorEnletras($totalAPagar, $contextMoneda));
                                echo "<b>" . $shoLiteralMoney . "</b>";
                                ?>
                                      </span>
        </td>
    </tr>

    <tr>

        <td colspan="6" align="center">
            <span style="color: #2b2b2b;">    -----------------------------------------------------------------------------------</span>
        </td>
    </tr>


    <tr>
        <td colspan="4">
            <span style="color: #2b2b2b;">  Atendido por : <strong><?PHP echo $userLogueado; ?> </strong></span>
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