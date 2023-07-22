<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'u142702078_clientes';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}