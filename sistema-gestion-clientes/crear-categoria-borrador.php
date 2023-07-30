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

	<h1>Crear cliente</h1>
	<p>
		Añade un cliente.
	</p>   
	<br/>
	<form action="guardar-categoria.php" method="POST">
		<label for="cedula">Cedula:</label>
		<input type="text" name="cedula" />
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" />
		<label for="apellido1">Apellido1:</label>
		<input type="text" name="apellido1" />
		<label for="apellido2">Apellido2:</label>
		<input type="text" name="apellido2" />
		<label for="email">Correo electronico:</label>
		<input type="email" name="email" />
		<label for="telefono1">Telefono1:</label>
		<input type="text" name="telefono1" />
		<label for="telefono2">Telefono2:</label>
		<input type="text" name="telefono2" />
		<label for="direccion_casa">Direccion casa:</label>
		<textarea name="direccion_casa" id="" cols="30" rows="10"></textarea>
		<label for="direccion_trabajo">Direccion trabajo:</label>
		<textarea name="direccion_trabajo" id="" cols="30" rows="10"></textarea>
		
		<input type="submit" value="Guardar" />
	</form>

</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>

