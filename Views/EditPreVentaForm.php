<form class="form-validate form-horizontal" name="form" action="UpdatePreventa.php" method="GET">

    <input type="hidden" id="idProducto" name="idProducto"  value="<?php echo $idProducto; ?>" >
    <input type="hidden" id="imagen"  name="imagen"  value="<?php echo $imagen; ?>" >
    <input type="hidden" id="precio"  name="precio"  value="<?php echo $precio; ?>" >
    <input type="hidden" id="pventa"  name="pventa"  value="<?php echo $pventa; ?>" >

    <input type="hidden" id="tipo"  name="tipo"  value="<?PHP echo $tipoUsuserio; ?>" >
    <input type="hidden" id="tipoPedido"  name="tipoPedido"  value="<?php echo $tipoPedido; ?>" >
    <input type="hidden" id="userId"  name="userId"  value="<?php echo $userId; ?>" >

    <input name="idpreventa" id="idpreventa"  type="hidden" value="<?php echo $idPreventa; ?>" />
    <table bgcolor="#ccc">
        <tr>
            <td>Producto :</td>
            <td> <input name="producto" id="producto"  class="textbox1"  type="text" value="<?php echo $producto; ?>" /></td>
        </tr>
        <tr>
            <td>Nueva cantidad :</td>
            <td> <input name="cantidadUpdated" id="cantidadUpdated"  class="textbox1" autocomplete="off"  type="text" value="<?php echo $cantidadActual; ?>" /></td>
        </tr>
        <tr>
            <td>Precio :  </td>
            <td><input name="nuevoPrecio"  id="nuevoPrecio"  class="textbox1"  readonly type="text" value="<?php echo $precio; ?>" /></td>
        </tr>
        <tr>
            <td height="10"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input name="a_update"  type="submit" name="Submit" role="button" class="btn btn-success"   value="Actualizar Pedido" />
            </td>
        <tr>
            <td height="20"></td>
        </tr>
    </table>
</form>