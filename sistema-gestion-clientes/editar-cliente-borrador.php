<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$cambiocliente = conseguirCategoria($db, $_GET['id']);

	//if(!isset($entrada_actual['id'])){
	//	header("Location: index.php");
	//}
?>
<?php require_once 'includes/cabecera.php'; ?>


<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Editar Cliente</h1>  
	<p>
	
	</p>

	<br/>
	<form action="guardar-cliente.php?editar=<?=$cambiocliente['id']?>" method="POST">
		
        <label for="cedula">Cedula</label>
		<input type="text" name="cedula" value="<?=$cambiocliente['cedula']?>">
        <label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?=$cambiocliente['nombre']?>">
        <label for="apellido1">Apellido1</label>  
		<input type="text" name="apellido1" value="<?=$cambiocliente['apellido1']?>">
        <label for="apellido2">Apellido2</label>
		<input type="text" name="apellido2" value="<?=$cambiocliente['apellido2']?>">
        <label for="email">Correo Electronico</label>
		<input type="email" name="email" value="<?=$cambiocliente['email']?>">
        <label for="telefono1">Telefono1</label>
		<input type="text" name="telefono1" value="<?=$cambiocliente['telefono1']?>">
        <label for="telefono2">Telefono2</label>
		<input type="text" name="telefono2" value="<?=$cambiocliente['telefono2']?>">
        <label for="direccion_casa">Direccion Casa:</label>
		<textarea name="direccion_casa" id="" cols="30" rows="10" style="width: 100%;"> <?=$cambiocliente['direccion_casa']?> </textarea>
        <label for="direccion_trabajo">Direccion Trabajo:</label>
		<textarea name="direccion_trabajo" id="" cols="30" rows="10" style="width: 100%;"> <?=$cambiocliente['direccion_trabajo']?> </textarea>

		
		
		<input type="submit" value="Guardar" /> 
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->

<?php require_once 'includes/pie.php'; ?>