<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$cambiousuario = conseguirUsuario($db, $_GET['id']);

	//if(!isset($entrada_actual['id'])){
	//	header("Location: index.php");
	//}
?>
<?php require_once 'includes/cabecera.php'; ?>

	  	
<!-- CAJA PRINCIPAL -->
<div id="principal">
	
	      
	<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_usuario']=='administrador'): ?>
		<div id="usuario-logueado" class="bloque">
			
			<!--botones-->
			<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
	  <h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
      
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="imagenes/purificadores-costa-rica.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CRM PCR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
	  <div class="image">
            <img src="imagenes/manager.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="entradas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de cambios de filtros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lista-clientes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear-categoria.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresar cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear-entradas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresar cambio de filtros</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="reportes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte cambio de filtros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lista-usuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ingresar-usuario.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresar usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cerrar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar sesion</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
          
          
          </li>
          <li class="nav-item">
          
         
          </li>
          <li class="nav-item">
           
          
          </li>
          <li class="nav-item">
           
           
          </li>
          <li class="nav-item">
           
            
        
          </li>
          
          
         
        
       
        
        
             
             
         
             
    
         
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">

    <!-- Formulario crear cliente -->
    
           <!-- general form elements -->
		   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="actualizar-usuario.php?editar=<?=$cambiousuario['id']?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" value="<?=$cambiousuario['nombre']?>">
                  </div>
                  <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" id="exampleInputPassword1" value="<?=$cambiousuario['apellidos']?>">
                  </div>
				  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="<?=$cambiousuario['email']?>">
                  </div>
				  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?=$cambiousuario['password']?>">
                  </div>
                  <div class="form-group">
                    <label for="cambiar_contraseña">Cambiar Contraseña</label>
                    <input type="password" name="cambiar_contraseña" class="form-control" id="exampleInputPassword1">
                  </div>
				  <div class="form-group">
                    <label for="nivel_usuario">Nivel Usuario</label>
                    <input type="text" name="nivel_usuario" class="form-control" id="exampleInputPassword1" value="<?=$cambiousuario['nivel_usuario']?>">
                  </div>
                  <div class="form-group">
                    <label for="cambiar_nivel_usuario">Cambiar Nivel de Usuario</label>
                    <select class="form-select" name="nivel_usuario" aria-label="Default select example">
                    <option value="no cambiar nivel de usuario" selected>No cambiar Nivel de Usuario</option>
                    <option value="vendedor">Vendedor</option>
                    <option value="administrador">Administrador</option>
                    </select>
                  </div>
				
					<div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                 
                    </div>
                  </div>  
                  
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
            <!-- /.card -->
    

    <!-- /.Formulario crear cliente -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
			
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


	
</div> <!--fin principal-->


			
<?php require_once 'includes/pie.php'; ?>





