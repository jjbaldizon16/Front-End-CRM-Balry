<?php
// Conexión a la base de datos (modifica con tus datos de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u142702078_clientes";

// Recibir el nombre del cliente enviado desde el formulario
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para buscar el cliente por nombre
    $sql = "SELECT id, nombre, apellido1, apellido2, email, telefono1, telefono2, direccion_casa, direccion_trabajo FROM categorias WHERE nombre LIKE '%$nombre%'";

    // Ejecutar la consulta
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Mostrar los resultados en una tabla
        echo "<h2>Resultados:</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>email</th>
                    <th>telefono1</th>
                    <th>Telefono2</th>
                    <th>Direccion Casa</th>
                    <th>Direccion Trabajo</th>
                    <th>Editar Registro</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['nombre']."</td>
                    <td>".$row['apellido1']."</td>
                    <td>".$row['apellido2']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['telefono1']."</td>
                    <td>".$row['telefono2']."</td>
                    <td>".$row['direccion_casa']."</td>
                    <td>".$row['direccion_trabajo']."</td>
                    <td><a href='editar-cliente.php?id=".$row['id']."'>Modificar</a></td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "<p>No se recibió el nombre del cliente.</p>";
}
?>
