<?php
if(isset($_POST)){
	// Conexión a la base de datos
	require_once 'includes/conexion.php';
	
    $categoria = $_POST['categoria'];
	$direccion_provincia = $_POST['direccion_provincia'];
	$direccion_instalacion = $_POST['direccion_instalacion'];
	$historial = $_POST['historial'];
	$fecha_ultimo_cambio = $_POST['fecha_ultimo_cambio'];
	$fecha_proximo_cambio = $_POST['fecha_proximo_cambio'];
	
	$sql = "INSERT INTO entradas VALUES(NULL, '$categoria', '$direccion_provincia', '$direccion_instalacion', '$historial', '$fecha_ultimo_cambio', '$fecha_proximo_cambio');";
	$guardar = mysqli_query($db, $sql);
	
	
   
}

header("Location: crear-entradas.php");

