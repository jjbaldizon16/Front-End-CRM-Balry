<?php

if(isset($_POST)){
	
	require_once 'includes/conexion.php';
	
	$direccion_instalacion = isset($_POST['direccion_instalacion']) ? mysqli_real_escape_string($db, $_POST['direccion_instalacion']) : false;
	$historial = isset($_POST['historial']) ? mysqli_real_escape_string($db, $_POST['historial']) : false;
	$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
	$usuario = $_SESSION['usuario']['id'];
	$fecha_ultimo_cambio = $_POST['fecha_ultimo_cambio'];
	$fecha_proximo_cambio = $_POST['fecha_proximo_cambio'];
	
	// Validación
	$errores = array();
	
	if(empty($titulo)){
		$errores['direccion_instalacion'] = 'El titulo no es válido';
	}
	
	if(empty($descripcion)){
		$errores['historial'] = 'La descripción no es válida';
	}
	
	if(empty($categoria) && !is_numeric($categoria)){
		$errores['categoria'] = 'La categoría no es válida';
	}
	  
	
	
		if(isset($_GET['editar'])){
			$entrada_id = $_GET['editar'];
			//$usuario_id = $_SESSION['usuario']['id'];
			
			$sql = "UPDATE entradas SET direccion_instalacion='$direccion_instalacion', historial='$historial', fecha_ultimo_cambio='$fecha_ultimo_cambio', fecha_proximo_cambio='$fecha_proximo_cambio' ".
					" WHERE id = $entrada_id";

		}

		$guardar = mysqli_query($db, $sql);

		header("Location: entradas.php");
	
	
}
