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
$registrosPorPagina = 10;
$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el desplazamiento para la consulta SQL
$desplazamiento = ($paginaActual - 1) * $registrosPorPagina;

// Consulta SQL con INNER JOIN y LIMIT para la paginación
$sql = "SELECT categorias.nombre, categorias.apellido1, entradas.direccion_instalacion, entradas.historial
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
foreach ($resultados as $fila) {
    echo "Nombre: " . $fila['nombre'] . ", Apellido1: " . $fila['apellido1'] . ", Direccion instalacion: " . $fila['direccion_instalacion'] . ", Historial: " . $fila['historial'] . "<br>";
}

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
