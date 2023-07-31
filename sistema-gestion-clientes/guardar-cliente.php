<?php

if(isset($_POST)){
	
	require_once 'includes/conexion.php';
	
	$cedula = isset($_POST['cedula']) ? mysqli_real_escape_string($db, $_POST['cedula']) : false;
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$apellido1 = isset($_POST['apellido1']) ? mysqli_real_escape_string($db, $_POST['apellido1']) : false;
	$apellido2 = isset($_POST['apellido2']) ? mysqli_real_escape_string($db, $_POST['apellido2']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
	$telefono1 = isset($_POST['telefono1']) ? mysqli_real_escape_string($db, $_POST['telefono1']) : false;
	$telefono2 = isset($_POST['telefono2']) ? mysqli_real_escape_string($db, $_POST['telefono2']) : false;
	$direccion_casa = isset($_POST['direccion_casa']) ? mysqli_real_escape_string($db, $_POST['direccion_casa']) : false;
	$direccion_trabajo = isset($_POST['direccion_trabajo']) ? mysqli_real_escape_string($db, $_POST['direccion_trabajo']) : false;
    //$apellido2 = isset($_POST['apellido2']) ? (int)$_POST['apellido2'] : false;
    //$email = isset($_POST['email']) ? (int)$_POST['email'] : false;
    //$telefono1 = isset($_POST['telefono1']) ? (int)$_POST['telefono1'] : false;
    //$telefono2 = isset($_POST['telefono2']) ? (int)$_POST['telefono2'] : false;
    //$direccion_casa = isset($_POST['direccion_casa']) ? (int)$_POST['direccion_casa'] : false;
    //$direccion_trabajo = isset($_POST['direccion_trabajo']) ? (int)$_POST['direccion_trabajo'] : false;
	//$usuario = $_SESSION['usuario']['id'];

	
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
			
			$sql = "UPDATE categorias SET cedula='$cedula', nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', email='$email', telefono1='$telefono1', telefono2='$telefono2', direccion_casa='$direccion_casa', direccion_trabajo='$direccion_trabajo' ".
					" WHERE id = $entrada_id";

		}

		$guardar = mysqli_query($db, $sql);

		header("Location: lista-clientes.php");
	
	
}
