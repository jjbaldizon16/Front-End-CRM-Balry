<?php
if (isset($_REQUEST['pos']))
  $inicio = $_REQUEST['pos'];
else
  $inicio = 0;
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "u142702078_clientes") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select cat.id as  
                                               id,
                                               cedula,
                                               nombre,
                                               apellido1, 
                                               apellido2 
		                                      from categorias as cat
                                          inner join entradas as entr on entr.categoria_id=cat.id
                                          limit $inicio,2") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Codigo:" . $reg['cedula'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['apellido1'] . "<br>";
    echo "Curso:" . $reg['apellido2'] . "<br>";
    echo "<hr>";
  }
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - 2;
    echo "<a href=\"pagina1.php?pos=$anterior\">Anteriores </a>";
  }
  if ($impresos == 2) {
    $proximo = $inicio + 2;
    echo "<a href=\"pagina1.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  mysqli_close($conexion);
  ?>

</body>

</html>