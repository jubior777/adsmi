<?PHP
$bd_host = "localhost";
	$bd_usuario = "root";
	$bd_password = "";
	$bd_base = "boliviae_digitalis2";




	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
    mysql_select_db($bd_base, $con);


?>