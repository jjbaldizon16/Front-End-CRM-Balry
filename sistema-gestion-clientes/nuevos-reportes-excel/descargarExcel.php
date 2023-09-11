<?php require_once '../includes/cabecera.php'; ?>
<?php require_once '../includes/redireccion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <!--Importante--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar</title>
</head>
<body>  
<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_usuario']=='administrador'):?>
<div id="usuario-logueado" class="bloque">
<?php

include('sep9@xxiwqb9qb3.php');

$provincia = $_POST['direccion_provincia'];
$rango1 = $_POST['rango1'];
$rango2 = $_POST['rango2'];

date_default_timezone_set("America/Bogota");
$fecha = date("d/m/Y");

header("Content-Type: text/html;charset=utf-8");
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
$filename = "ReporteExcel_" .$fecha. ".xls";
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Disposition: attachment; filename=" . $filename . "");


$listPais = ("SELECT e.*, c.nombre AS 'nombre', c.apellido1 AS 'apellido1', c.apellido2 AS 'apellido2', c.telefono1 AS 'telefono1', c.telefono2 AS 'telefono2' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id WHERE direccion_provincia = "."'$provincia'"." AND fecha_proximo_cambio BETWEEN "."'$rango1'"." AND "."'$rango2'"."");
$DataPaises = mysqli_query($con, $listPais);

?>


<table style="text-align: center;" border='1' cellpadding=1 cellspacing=1>
<thead>
    <tr style="background: #D0CDCD;">
    <th>#</th>
    <th>Nombre</th>
    <th>Apellido1</th>
    <th>Apellido2</th>
    <th>telefono1</th>
    <th>Telefono2</th>
    <th>Provincia</th>
    <th>Direccion Instalacion</th>
    <th>Historial</th>
    <th>Fecha Ultimo Cambio</th>
    <th>Fecha Proximo Cambio</th>
    </tr>
</thead>
<?php
$i =1;
    while ($pais = mysqli_fetch_array($DataPaises)) { ?>
    <tbody>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $pais['nombre']; ?></td>
            <td><?php echo $pais['apellido1']; ?></td>
            <td><?php echo $pais['apellido2'] ; ?></td>
            <td><?php echo $pais['telefono1'] ; ?></td>
            <td><?php echo $pais['telefono2'] ; ?></td>
            <td><?php echo $pais['direccion_provincia'] ; ?></td>
            <td><?php echo $pais['direccion_instalacion'] ; ?></td>
            <td><?php echo $pais['historial'] ; ?></td>
            <td><?php echo $pais['fecha_ultimo_cambio'] ; ?></td>
            <td><?php echo $pais['fecha_proximo_cambio'] ; ?></td>
        </tr>
    </tbody>
    
<?php } ?>
</table>
</div>
<?php endif ?> 

<?php
// Redirigir a una página web específica
$pagina_redireccion = "../index.php";
header("Location: $pagina_redireccion");
exit; // Asegúrate de salir del script después de la redirección
?>



</body>
    
   
 
</html>
