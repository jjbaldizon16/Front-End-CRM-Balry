<?php require_once 'includes/cabecera.php'; ?>

<!-- Formulario Buscar cliente -->

<form action="buscar-cliente.php" method="post">
<h5>Buscar cliente</h5>
<label for="busqueda"></label>
<input type="text" name="busqueda" placeholder="Nombre del cliente">
<button>Buscar</button>
</form>

<!--Fin formulario Buscar cliente-->
		

		
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
$sql = "SELECT categorias.nombre, categorias.apellido1, categorias.apellido2, categorias.telefono1, categorias.telefono2, entradas.id, entradas.direccion_provincia, entradas.direccion_instalacion, entradas.historial, entradas.fecha_ultimo_cambio, entradas.fecha_proximo_cambio
        FROM categorias
        INNER JOIN entradas ON categorias.id = entradas.categoria_id
        ORDER BY categorias.id
        LIMIT $desplazamiento, $registrosPorPagina";

try {
    $stmt = $dbh->prepare($sql);  
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error en la consulta: " . $e->getMessage());
}

// Consulta para obtener el total de registros sin aplicar el límite de paginación
$totalRegistros = $dbh->query("SELECT COUNT(*) FROM categorias INNER JOIN entradas ON categorias.id = entradas.categoria_id")->fetchColumn();

// Calcular el número total de páginas
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

// Mostrar los resultados
foreach ($resultados as $fila):


	?>
  
<tr>



    <td scope="row"><?=$fila['nombre'].' '.$fila['apellido1'].' '.$fila['apellido2']?></td>
    
	<td><?=$fila['telefono1']?></td>

	<td><?=$fila['telefono2']?></td>

	<td><?=$fila['direccion_provincia']?></td>

    <td><?=$fila['direccion_instalacion']?></td>

    <td><?=$fila['historial']?></td>

	<td><?=$fila['fecha_ultimo_cambio']?></td>

	<td><?=$fila['fecha_proximo_cambio']?></td>

	<td><a href="editar-entrada.php?id=<?=$fila['id']?>" class="boton boton-verde">Editar registro</a></td>


	




  </tr>

  <?php 
  
  endforeach;
 
  ?>

</table>


<?php

// Mostrar la paginación
   echo "<br>";
   echo "Página " . $paginaActual . " de " . $totalPaginas . "<br>";
   if ($paginaActual > 1) {
  echo "<a href='?pagina=" . ($paginaActual - 1) . "'>Anterior</a> ";
  }
  if ($paginaActual < $totalPaginas) {
  echo "<a href='?pagina=" . ($paginaActual + 1) . "'>Siguiente</a>";
  }

  
  ?>

</div> <!--fin principal-->


			
<?php require_once 'includes/pie.php'; ?>