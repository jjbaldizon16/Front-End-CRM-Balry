<?php
if(isset($_POST)){
	// Conexión a la base de datos
	require_once 'includes/conexion.php';
	
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$email = $_POST['email'];
	$telefono1 = $_POST['telefono1'];
	$telefono2 = $_POST['telefono2'];
	$direccion_casa = $_POST['direccion_casa'];
	$direccion_trabajo = $_POST['direccion_trabajo'];
	
	$sql = "INSERT INTO categorias VALUES(NULL, '$cedula', '$nombre', '$apellido1', '$apellido2', '$email', '$telefono1', '$telefono2', '$direccion_casa', '$direccion_trabajo');";
	$guardar = mysqli_query($db, $sql);
	
	
}

header("Location: crear-categoria.php");
