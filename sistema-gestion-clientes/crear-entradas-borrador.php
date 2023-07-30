<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	


<!-- CAJA PRINCIPAL -->
<div id="principal">  

<h1>Sistema Gestion de Clientes PCR</h1>
	      
		  <?php if(isset($_SESSION['usuario'])): ?>
			  <div id="usuario-logueado" class="bloque">
				  <h3>Usuario, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
				  <!--botones-->
				  <a href="entradas.php" class="boton">Ver lista de cambios de filtros</a>
		          <a href="lista-clientes.php" class="boton">Ver lista de clientes</a>
			      <a href="crear-entradas.php" class="boton boton-verde">Crear cambio de filtros</a>
			      <a href="crear-categoria.php" class="boton boton-verde">Crear cliente</a>
			      <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
			      <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
			  </div>
	  
		  <div id="ver-todas">
			  <a href="entradas.php">Ver lista de cambios de filtros</a>
		  </div>
	   
		  <?php endif; ?>

	<h1>Crear cambio de filtros</h1>
	<p>
		Acontinuacion puede registrar un nuevo cambio de filtro.
	</p>
	<br/>
	<form action="guardar-cambio-filtros.php" method="POST">

	<label for="categoria">Seleccione el cliente</label>
		<select name="categoria">
			<?php 
				$categorias = conseguirCategorias($db); 
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)): 
			?>
				<option value="<?=$categoria['id']?>">
					<?=$categoria['cedula'].' '.$categoria['nombre'].' '.$categoria['apellido1'].' '.$categoria['apellido2']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
	>
         <label for="direccion_provincia">Direccion provincia instalacion</label>
	     <select class="form-select" name="direccion_provincia" aria-label="Default select example">
         <option selected>Seleccione la provincia</option>
         <option value="san jose">San Jose</option>
         <option value="alajuela">Alajuela</option>
         <option value="cartago">Cartago</option>
		 <option value="heredia">Heredia</option>
		 <option value="guanacaste">Guanacaste</option>
		 <option value="puntarenas">Puntarenas</option>
		 <option value="limon">Limon</option>
         </select>

		<label for="direccion_instalacion">Direccion de instalacion:</label>
		<textarea name="direccion_instalacion" id="" cols="30" rows="10"></textarea>	
		<label for="historial">Historial:</label>
		<textarea name="historial" id="" cols="30" rows="10"></textarea>
		<label for="fecha_ultimo_cambio">Fecha de ultimo cambio</label>
		<input type="date" name="fecha_ultimo_cambio">
		<label for="fecha_proximo_cambio" name="fecha_proximo_cambio">Fecha del proximo cambio</label>
		<input type="date" name="fecha_proximo_cambio">
		
		
	
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>

