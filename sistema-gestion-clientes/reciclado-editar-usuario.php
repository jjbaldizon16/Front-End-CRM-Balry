<?php if(!isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_usuario']=='administrador'): ?>
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
             
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
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
    <?php require_once 'includes/pie.php'; ?>