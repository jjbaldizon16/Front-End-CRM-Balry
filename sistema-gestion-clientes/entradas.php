<?php require_once 'includes/cabecera.php'; ?>
		

		
<!-- CAJA PRINCIPAL -->
<div>
	<h1>Todos los cambios de filtros</h1>

	<table class="table">

  <tr>

    <td class="col">Cliente</td>

	<td class="col">Telefono1</td>

	<td class="col">Telefono2</td>

	<td class="col">Provincia</td>

    <td class="col">Direccion Instacion</td>

    <td class="col">Historial</td>
	
	<td class="col">Fecha Ultimo Cambio</td>

	<td class="col">Fecha Proximo Cambio</td>

	<td class="col">Editar</td>

  </tr>



  <?php 
		$entradas = conseguirEntradas($db);
		if(!empty($entradas)):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
  
<tr>



    <td scope="row"><?=$entrada['nombre'].' '.$entrada['apellido1'].' '.$entrada['apellido2']?></td>
    
	<td><?=$entrada['telefono1']?></td>

	<td><?=$entrada['telefono2']?></td>

	<td><?=$entrada['direccion_provincia']?></td>

    <td><?=$entrada['direccion_instalacion']?></td>

    <td><?=$entrada['historial']?></td>

	<td><?=$entrada['fecha_ultimo_cambio']?></td>

	<td><?=$entrada['fecha_proximo_cambio']?></td>

	<td><a href="editar-entrada.php?id=<?=$entrada['id']?>" class="boton boton-verde">Editar registro</a></td>


	




  </tr>

  <?php
			endwhile;
		endif;
	?>

</table>
	

</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>