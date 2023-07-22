<?php
// Conexión
$servidor = 'localhost';
$usuario = 'u142702078_clientes';
$password = 'Holanda2050';
$basededatos = 'u142702078_clientes';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}