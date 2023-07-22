<?php
$usuario  = "u142702078_clientes";
$password = "Holanda2050";
$servidor = "localhost";
$basededatos = "u142702078_clientes";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

?>

