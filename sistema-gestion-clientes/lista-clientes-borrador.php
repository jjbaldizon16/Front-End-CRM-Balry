<?php require_once 'includes/cabecera.php'; ?>
		

		
<!-- CAJA PRINCIPAL -->
<div>
	<h1>Lista de Clientes</h1>

	<table class="table">    

  <tr>

    <td class="col">Cedula</td>

	<td class="col">Nombre</td>

	<td class="col">Apellido1</td>

    <td class="col">Apellido2</td>

    <td class="col">Correo Electronico</td>
	
	<td class="col">Telefono1</td>

	<td class="col">Telefono2</td>

	<td class="col">Direccion Casa</td>

	<td class="col">Direccion Trabajo</td>

	<td class="col">Editar</td>

  </tr>



  <?php 
		$entradas = conseguirCategorias($db);
		if(!empty($entradas)):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
  
<tr>
   


    <td scope="row"><?=$entrada['cedula']?></td>
    
	<td><?=$entrada['nombre']?></td>

	<td><?=$entrada['apellido1']?></td>

    <td><?=$entrada['apellido2']?></td>

    <td><?=$entrada['email']?></td>

	<td><?=$entrada['telefono1']?></td>

	<td><?=$entrada['telefono2']?></td>

	<td><?=$entrada['direccion_casa']?></td>

	<td><?=$entrada['direccion_trabajo']?></td>

	<td><a href="editar-cliente.php?id=<?=$entrada['id']?>" class="boton boton-verde">Editar registro</a></td>

  
	




  </tr>

  <?php
			endwhile;
		endif;
	?>

</table>
	

</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>

