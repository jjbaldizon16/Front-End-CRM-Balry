<?php require_once 'includes/cabecera.php'; ?>

		
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
	<!--<div id="login" class="bloque">-->
	<div class="hold-transition login-page">
	<div class="login-box">
	<div class="login-logo">
    <a href=""><b>CRM</b>Purificadores Costa Rica</a>
    </div>
	
		
		<?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['error_login'];?>
			</div>   
		<?php endif; ?>
		<div class="card">
		<div class="card-body login-card-body">
		<p class="login-box-msg">Ingrese sus credenciales para entrar al sistema</p>
		
		<form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
	</div>
	</div>
	</div>
    </div>
	</div>
	</div>
	
	<?php endif; ?>


	
</div> <!--fin principal-->


			
<?php require_once 'includes/pie.php'; ?>