<?php
require ('../Model/Connexion.php');
require ('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['nombres'])
{
    session_destroy();
    echo '<script language = javascript>
	alert("su sesion ha terminado  ")
	self.location = "../index.php"
	</script>';}
else
{
    echo '<script language = javascript>
	alert("su sesion no ha terminado 2")
	self.location = "../index.php"
	</script>';}

?>