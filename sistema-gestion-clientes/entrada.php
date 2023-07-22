<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$cambiofiltro = conseguirCambiofiltro($db, $_GET['id']);

	if(!isset($cambiofiltro['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">

	<h1><?=$cambiofiltro['direccion_instalacion']?></h1>
	
	    <h2><?=$cambiofiltro['historial']?></h2>
		<h2><?=$cambiofiltro['fecha_ultimo_cambio']?></h2>
	</a>
	<h4><?=$cambiofiltro['fecha_proximo_cambio']?></h4>
	<p>
		<?=$cambiofiltro['categoria_id']?>
	</p>
	
		<br/>	
		<!--<a href="editar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-verde">Editar entrada</a>
		<a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton">Eliminar entrada</a>-->

	
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>