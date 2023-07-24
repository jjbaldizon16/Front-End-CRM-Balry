
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/redireccion.php'; ?>

<?php if(isset($_SESSION['usuario'])): ?>
<div id="usuario-logueado" class="bloque">

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

    <?php

$CantidadMostrar=5;
//Conexion  al servidor mysql
$conetar = new mysqli("localhost", "root", "", "u142702078_clientes");
if ($conetar->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conetar->connect_errno . ") " . $conetar->connect_error;
}else{
                    // Validado de la variable GET
        $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
	$TotalReg       =$conetar->query("SELECT e.*, c.nombre AS 'nombre', c.apellido1 AS 'apellido1', c.apellido2 AS 'apellido2', c.telefono1 AS 'telefono1', c.telefono2 AS 'telefono2' FROM entradas e ".
                                     "INNER JOIN categorias c ON e.categoria_id = c.id ");
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar 
	$TotalRegistro  =ceil($TotalReg->num_rows/$CantidadMostrar);
	echo "<b>La cantidad de registro se dividió a: </b>".$TotalRegistro." para mostrar 5 en 5<br>";
	//Consulta SQL
	$consultavistas ="SELECT e.*, c.nombre AS 'nombre', c.apellido1 AS 'apellido1', c.apellido2 AS 'apellido2', c.telefono1 AS 'telefono1', c.telefono2 AS 'telefono2' FROM entradas e ".
                     "INNER JOIN categorias c ON e.categoria_id = c.id ".
                     "ORDER BY ".
                     "c.nombre ASC ".
					 "LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
	                  $consulta=$conetar->query($consultavistas);


?>

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
		while ($lista=$consulta->mysqli_fetch_assoc()):
            
        
	?>
  
<tr>



    <td scope="row"><?=$lista['nombre'].' '.$lista[1].' '.$lista[2]?></td>
    
	<td><?=$lista[3]?></td>

	<td><?=$lista[4]?></td>

	<td><?=$lista[5]?></td>

    <td><?=$lista[6]?></td>

    <td><?=$lista[7]?></td>

	<td><?=$lista[8]?></td>

	<td><?=$lista[9]?></td>

	<td><a href="editar-entrada.php?id=<?=$entrada['id']?>" class="boton boton-verde">Editar registro</a></td>


	




  </tr>

  <?php
			endwhile;
		
	?>

</table>
<?php

   /*Sector de Paginacion */
    
    //Operacion matematica para botón siguiente y atrás 
	$IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):1;
  	$DecrementNum =(($compag -1))<1?1:($compag -1);
  
	echo "<ul><li class=\"btn\"><a href=\"?pag=".$DecrementNum."\">◀</a></li>";
    //Se resta y suma con el numero de pag actual con el cantidad de 
    //números  a mostrar
     $Desde=$compag-(ceil($CantidadMostrar/2)-1);
     $Hasta=$compag+(ceil($CantidadMostrar/2)-1);
     
     //Se valida
     $Desde=($Desde<1)?1: $Desde;
     $Hasta=($Hasta<$CantidadMostrar)?$CantidadMostrar:$Hasta;
     //Se muestra los números de paginas
     for($i=$Desde; $i<=$Hasta;$i++){
     	//Se valida la paginacion total
     	//de registros
     	if($i<=$TotalRegistro){
     		//Validamos la pag activo
     	  if($i==$compag){
           echo "<li class=\"active\"><a href=\"?pag=".$i."\">".$i."</a></li>";
     	  }else {
     	  	echo "<li><a href=\"?pag=".$i."\">".$i."</a></li>";
     	  }     		
     	}
     }
	echo "<li class=\"btn\"><a href=\"?pag=".$IncrimentNum."\">▶</a></li></ul>";
  
}


?>

</div> <!--fin principal-->

</div>
	
<?php endif; ?>
			
<?php require_once 'includes/pie.php'; ?>