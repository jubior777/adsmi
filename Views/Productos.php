<?php
$row = 1;
while ($product = mysqli_fetch_array($allProducto)) {
    if ($row > 4) {
        echo "</tr><tr class='success'>";
        $row = 1;
    }
    ?>
    <td background="<?PHP echo $urlViews; ?>img/menuPOS.jpg" align="center">
        <div style="width: 112px">
            <div class="single-product">
                <div class="product-f-image">
                    <img src="<?PHP echo $urlViews . $product['imagen']; ?>" width="90" height="90" class="imgRedonda">
                    <div class="product-hover">
                        <a onclick="insertarPedidoMesa('<?PHP echo $product['idproducto'];?>','<?PHP echo $id_usuario;?>')" data-name="Mouse" style="text-decoration: none; cursor: pointer;"
                           class="add-to-cart-link">Mesa</a>
                        <a onclick="insertarPedidoLlevar('<?PHP echo $product['idproducto'];?>','<?PHP echo $id_usuario;?>')" data-name="Mouse" style="text-decoration: none; cursor: pointer;"
                           class="view-details-link">Llevar</a>
                    </div>

                    <span style="color: #FFFFFF">
                    <b>
                        <?PHP echo $product['nombreProducto'];
                        echo '<br>';
                        echo $product['precioVenta'];
                        echo '&nbsp;';
                        echo $tipoMonedaElegida; ?>   .
                    </b>
                        </span>
                </div>
            </div>
        </div>
    </td>
    <?php
    $row++;
}

echo '</tr>';


?>