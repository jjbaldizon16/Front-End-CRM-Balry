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

	<h1>Generar Reporte</h1>
	<p>
		
	</p>
	<br/>
	<form action="nuevos-reportes-excel/descargarExcel.php" method="POST">

    <label for="direccion_provincia">Seleccione la provincia</label>
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
		 
		<label for="rango1">Rango de Fecha 1</label>
		<input type="date" name="rango1">
		<label for="rango2">Rango de Fecha 2</label>
		<input type="date" name="rango2">
		
		<input type="submit" value="Descargar Reporte" />
	</form>

</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>


