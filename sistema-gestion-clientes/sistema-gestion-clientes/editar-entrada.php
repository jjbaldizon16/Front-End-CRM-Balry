<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$cambiofiltro = conseguirCambiofiltro($db, $_GET['id']);

	//if(!isset($entrada_actual['id'])){
	//	header("Location: index.php");
	//}
?>
<?php require_once 'includes/cabecera.php'; ?>


<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Editar cambio de filtro</h1>  
	<p>
	
	</p>

	<br/>
	<form action="guardar-entrada.php?editar=<?=$cambiofiltro['id']?>" method="POST">
		<label for="direccion_instalacion">Direcccion de instalacion:</label>
		<textarea name="direccion_instalacion" id="" cols="30" rows="10" > <?=$cambiofiltro['direccion_instalacion']?> </textarea>
		<label for="historial">Historial:</label>
		<textarea name="historial" id="" cols="30" rows="10" > <?=$cambiofiltro['historial']?> </textarea>
	    <label for="fecha_ultimo_cambio">Fecha ultimo cambio</label>
		<input type="date" name="fecha_ultimo_cambio" value="<?=$cambiofiltro['fecha_ultimo_cambio']?>">
		<label for="fecha_proximo_cambio">Fecha proximo cambio</label>
		<input type="date" name="fecha_proximo_cambio" value="<?=$cambiofiltro['fecha_proximo_cambio']?>">
		
		<input type="submit" value="Guardar" /> 
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->

<?php require_once 'includes/pie.php'; ?>