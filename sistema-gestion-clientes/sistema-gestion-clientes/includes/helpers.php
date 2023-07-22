<?php

function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
	}
	
	return $alerta;
}

function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['errores_entrada'])){
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['completado'])){
		$_SESSION['completado'] = null;
		$borrado = true;
	}
	
	return $borrado;
}

function conseguirCategorias($conexion){
	$sql = "SELECT * FROM categorias ORDER BY id ASC;";
	$categorias = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = $categorias;
	}
	
	return $resultado;
}

function conseguirCategoria($conexion, $id){
	$sql = "SELECT * FROM categorias WHERE id = $id;";
	$categorias = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = mysqli_fetch_assoc($categorias);
	}
	
	return $resultado;
}

function conseguirCambiofiltro($conexion, $id) {

     $sql = "SELECT * FROM entradas Where id = $id;";
	 $cambiofiltro = mysqli_query($conexion, $sql);

	 $resultado = array();
	if($cambiofiltro && mysqli_num_rows($cambiofiltro) >= 1){
		$resultado = mysqli_fetch_assoc($cambiofiltro);
	}
	
	return $resultado;

}

function conseguirCliente($conexion, $id) {

  
	$sql = "SELECT FROM categorias Where id = $id;";
	$cambiocliente = mysqli_query($conexion, $sql);

	$resultado = array();
   if($cambiocliente && mysqli_num_rows($cambiocliente) >= 1){
	   $resultado = mysqli_fetch_assoc($cambiocliente);
   }
   
   return $resultado;

}

function conseguirClientes($conexion, $limit = null, $categoria = null, $busqueda = null) {

	$sql="SELECT e.*, c.cedula AS 'cedula', c.nombre AS 'nombre', c.apellido1 AS 'apellido1', c.apellido2 AS 'apellido2', c.email AS 'email', c.telefono1 AS 'telefono1', c.telefono2 AS 'telefono2', c.direccion_casa AS 'direccion_casa', c.direccion_trabajo AS 'direccion_trabajo' FROM entradas e ".
	"INNER JOIN categorias c ON e.categoria_id = c.id ";

if(!empty($categoria)){
   $sql .= "WHERE e.categoria_id = $categoria ";
}

if(!empty($busqueda)){
   $sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
}

$sql .= "ORDER BY e.id DESC ";

if($limit){
   // $sql = $sql." LIMIT 4";
   $sql .= "LIMIT 4";
}

$entradas = mysqli_query($conexion, $sql);

$resultado = array();
if($entradas && mysqli_num_rows($entradas) >= 1){
   $resultado = $entradas;
}

return $entradas;

}

function conseguirEntrada($conexion, $id){
	$sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellido1) AS usuario"
		  . " FROM entradas e ".
		   "INNER JOIN categorias c ON e.categoria_id = c.id ".
		   "INNER JOIN usuarios u ON e.usuario_id = u.id ".
		   "WHERE e.id = $id";
	$entrada = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = null){
	$sql="SELECT e.*, c.nombre AS 'nombre', c.apellido1 AS 'apellido1', c.apellido2 AS 'apellido2', c.telefono1 AS 'telefono1', c.telefono2 AS 'telefono2' FROM entradas e ".
		 "INNER JOIN categorias c ON e.categoria_id = c.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	
	return $entradas;
}



