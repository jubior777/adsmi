<!DOCTYPE html>
<html lang="es">
<?php
include("Head.php");
?>
<body>
<section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>
        <?PHP include("Logo.php"); ?>
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
    <?PHP include("Menu.php"); ?>

</section>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
            </div></div>
        </div>
<br><br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- page start-->
                    <div class="row">
                        <div class="col-sm-7">

                            <section class="panel">
                                <div class="row">
                                    <header class="panel-heading tab-bg-primary ">

                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a data-toggle="tab" href="#home">PRODUCTOS</a>
                                            </li>
                                        </ul>

                                    </header>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane active">

<!--                                                id="dataTables-example"-->

                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                     <?PHP
                                                    //   include ("Productos.php");
                                                     ?>
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

                                                    </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>

                        <div class="col-sm-5">

                            <div id="resultado">
                             <?PHP
                             //  include ("Pedido.php");
                                                                ?>
                                    <section class="panel">

                                        <header align="center" class="alert alert-info">
                                            <strong>
                                                PRODUCTOS SOLICITADOS
                                            </strong>
                                        </header>

                                        <div id="formularioEdit" style="display: none;"></div>
                                        <table class="table table-striped">
                                            <thead>

                                            <tr>
                                                <td width="20"><b>Imagen</b></td>
                                                <td><b>Productos</b></td>
                                                <td><b>Cant.</b></td>
                                                <td><b>Precio</b></td>
                                                <td><b>Total</b></td>
                                                <td><b>Tipo</b></td>
                                                <td><b>Opcion</b></td>
                                            </tr>
                                            <?PHP
                                            $showPreventa = $con->getPreventa();
                                            while ($preventa = mysqli_fetch_array($showPreventa)) {
                                                ?>
                                                <tr>
                                                    <td><img src="<?php echo $urlViews . $preventa['imagen'] ?>" height="60" width="60"></td>
                                                    <td><b> <?PHP echo $preventa['producto']; ?></b></td>
                                                    <td><?PHP echo $preventa['cantidad']; ?></td>
                                                    <td><?PHP echo $preventa['precio']; ?></td>
                                                    <td><?PHP echo $preventa['totalPrecio']; ?></td>
                                                    <td><?PHP echo $preventa['tipo']; ?></td>
                                                    <td>

                                                        <?PHP
                                                        echo "<a style=\"cursor:pointer;\"  class='btn btn-success'   
                                                                onclick=\"editarPreventa('" . $preventa['idProducto'] . "','" . $preventa['tipo'] . "','" . $preventa['idUser'] . "')\">
                                                                <i class='icon_pencil-edit'></i></a>";

                                                        echo "<a style=\"cursor:pointer;\"  class='btn btn-danger'
                                                            onclick=\"deleteOnlyProducto('" . $preventa['idProducto'] . "','" . $preventa['tipo'] . "','" . $preventa['idUser'] . "')\">
                                                    <i class='icon_minus-box'></i></a>"; ?>

                                                    </td>
                                                </tr>

                                            <?PHP } ?>

                                            <tr>
                                                <td colspan="3"></td>
                                                <td><strong> Total :</strong></td>
                                                <td>
                                                    <h2>
                                                        <strong>
                                                            <?PHP
                                                            $totalPreventaConsulta = $con->getTotalPreventa();
                                                            while ($totalVenta = mysqli_fetch_array($totalPreventaConsulta)) {
                                                                $userId = $totalVenta['idUser'];
                                                                echo $totalVenta['total'];
                                                            }
                                                            ?>
                                                        </strong>
                                                    </h2>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="4" align="center">
                                                    <?PHP
                                                    if (isset($userId)) {

                                                        echo " <a  data-toggle='modal'  class='btn btn-primary enabled'
                                                                href='Factura.php?usuario=$usuario&password=$password'
                                                                data-target='#myModal'>
                                                        <i class='icon_check'></i><strong> ACEPTAR</strong> </a>
                                                        <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>      
                                                        <div class='modal-dialog'>
                                                            <div class='modal-content'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        ";
                                                    } else {
                                                        echo " <a style=\"cursor:pointer;\"  class='btn btn-primary disabled '
                                                                onclick=\"\">
                                                        <i class='icon_check'></i><strong> ACEPTAR</strong> </a> ";
                                                    }
                                                    ?>

                                                </td>
                                                <td colspan="3" align="center">
                                                    <?PHP
                                                    if (isset($userId)) {
                                                        echo " <a style=\"cursor:pointer;\"  class='btn btn-danger'
                                                                onclick=\"deleteAllPreventa('" . $userId . "')\">
                                                        <i class='icon_minus-box'></i><strong> CANCELAR</strong> </a> ";
                                                    } else {
                                                        echo " <a style=\"cursor:pointer;\"  class='btn btn-danger disabled '
                                                                onclick=\"\">
                                                        <i class='icon_minus-box'></i><strong> CANCELAR</strong> </a> ";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>


                                            </thead>
                                        </table>


                                    </section>



                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>
</section>
<!--main content end-->

<?PHP include('LibraryJs.php'); ?>


</body>
</html>