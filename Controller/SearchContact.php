<?php
require('../Model/Connexion.php');
require('Constans.php');
$con = new conexion();

if (!isset($_SESSION)) {
    session_start();
}
$nitCliente = $_POST['nitClient'];
$showContact = $con->getContact($nitCliente);

if (mysqli_num_rows($showContact) == 0) {
    echo '<input class="form-control input-lg m-bot15"   size="25"  type="text"   name="nombreNewCliente"  />';
} else {
    while ($fila = mysqli_fetch_array($showContact)) {
        echo '<div onclick="myFunction2(' . $fila["idcliente"] . ')">' . $fila['apellido'] . '</div>';
    }
}

?>