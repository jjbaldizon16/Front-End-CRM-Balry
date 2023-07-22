<?php require_once 'includes/cabecera.php'; ?>
<!-- Index CRM System -->
	
<!-- CAJA PRINCIPAL -->
<div id="principal">
	
	      
	<?php if(isset($_SESSION['usuario'])): ?>
		<div id="usuario-logueado" class="bloque">
			<h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
			<!--botones-->
			<a href="entradas.php" class="boton">Ver lista de cambios de filtros</a>
		    <a href="lista-clientes.php" class="boton">Ver lista de clientes</a>
			<a href="crear-entradas.php" class="boton boton-verde">Crear cambio de filtros</a>
			<a href="crear-categoria.php" class="boton boton-verde">Crear cliente</a>
			<a href="reportes.php" class="boton boton-naranja">Reportes cambios de filtros</a>
			<a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
			<a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
		</div>

	<div id="ver-todas">
		
	</div>

	<div id="ver-todas">
		
	</div>

	<?php endif; ?>
	
	<?php if(!isset($_SESSION['usuario'])): ?>
	<div id="login" class="bloque">
		<h3>Identificate</h3>
		
		<?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['error_login'];?>
			</div>
		<?php endif; ?>
		
		<form action="login.php" method="POST"> 
			<label for="email">Email</label>
			<input type="email" name="email" />

			<label for="password">Contraseña</label>
			<input type="password" name="password" />

			<input type="submit" value="Entrar" />
		</form>
	</div>

	
	<?php endif; ?>


	
</div> <!--fin principal-->


			
<?php require_once 'includes/pie.php'; ?>