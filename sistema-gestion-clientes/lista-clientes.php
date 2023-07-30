<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/redireccion.php'; ?>

		
<!-- CAJA PRINCIPAL -->
<div id="principal">
	
	      
	<?php if(isset($_SESSION['usuario'])): ?>
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

    <!-- Lista de cambios de filtros -->
    

    <div class="card">
    
              <div class="card-header">
              <h3>Todos los cambios de filtros</h3> <br>
                
              <!-- Formulario Buscar cliente -->

              <form action="buscar-resultado.php" method="post">
              <h5>Buscar cliente</h5>
              <label for="busqueda"></label>
              <input type="text" name="nombre" placeholder="Nombre del cliente">
              <button>Buscar</button>
              </form>

<!--Fin formulario Buscar cliente-->
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
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
	
	// Establecer la conexión a la base de datos (reemplaza los valores con los de tu base de datos)
$host = 'localhost';
$dbname = 'u142702078_clientes';
$username = 'root';
$password = '';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Configuración de paginación
$registrosPorPagina = 3;
$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el desplazamiento para la consulta SQL
$desplazamiento = ($paginaActual - 1) * $registrosPorPagina;

// Consulta SQL con INNER JOIN y LIMIT para la paginación
$sql = "SELECT * FROM categorias ORDER BY id LIMIT $desplazamiento, $registrosPorPagina";

try {
    $stmt = $dbh->prepare($sql);  
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error en la consulta: " . $e->getMessage());
}

// Consulta para obtener el total de registros sin aplicar el límite de paginación
$totalRegistros = $dbh->query("SELECT COUNT(*) FROM categorias")->fetchColumn();

// Calcular el número total de páginas
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

// Mostrar los resultados
foreach ($resultados as $fila):


	?>

                  </thead>
                  <tbody>
                  
       
	              <td scope="row"><?=$fila['cedula']?></td>

	              <td><?=$fila['nombre']?></td>

	             <td><?=$fila['apellido1']?></td>

                 <td><?=$fila['apellido2']?></td>

                 <td><?=$fila['email']?></td>

	             <td><?=$fila['telefono1']?></td>

	             <td><?=$fila['telefono2']?></td>

                 <td><?=$fila['direccion_casa']?></td>

                 <td><?=$fila['direccion_trabajo']?></td>

                 <td><a href="editar-cliente.php?id=<?=$fila['id']?>" class="btn btn-primary">Editar registro</a></td>

	            


	

                  </tbody>
                  <tfoot>
                  <?php 
  
                  endforeach;

                  ?>
                  </tfoot>
                </table>

                <?php

                 // Mostrar la paginación
                 echo "<br>";
                 echo "Página " . $paginaActual . " de " . $totalPaginas . "<br>";
                 if ($paginaActual > 1) {
                 echo "<a class='btn btn-primary' href='?pagina=" . ($paginaActual - 1) . "'>Anterior</a> ";
                 }
                 if ($paginaActual < $totalPaginas) {
                 echo "<a class='btn btn-primary' href='?pagina=" . ($paginaActual + 1) . "'>Siguiente</a>";
                 }

  
  ?>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

    <!-- /.Lista de cambios de filtros -->
      
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


