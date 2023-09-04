<?php
require_once 'includes/cabecera.php';
if(isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_usuario']=='administrador'){

// Conexión a la base de datos (ajusta estos valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$database = "u142702078_clientes";
   
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibe los datos del formulario POST
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);

// Verifica si el valor de nivel_usuario es "no cambiar nivel de usuario"
if ($_POST["nivel_usuario"] === "no cambiar nivel de usuario") {
    // No se actualiza el campo nivel_usuario
    $sql = "UPDATE usuarios SET nombre=?, apellidos=?, email=?, password=? WHERE id=?";
} else {
    // Se actualiza el campo nivel_usuario
    $nivel_usuario = $_POST["nivel_usuario"];
    $sql = "UPDATE usuarios SET nombre=?, apellidos=?, email=?, password=?, nivel_usuario=? WHERE id=?";
}

// Preparar la consulta
if ($stmt = $conn->prepare($sql)) {
    // Bind de parámetros
    if ($_POST["nivel_usuario"] === "no cambiar nivel de usuario") {
        $stmt->bind_param("ssssi", $nombre, $apellidos, $email, $password, $id);
    } else {
        $stmt->bind_param("sssssi", $nombre, $apellidos, $email, $password, $nivel_usuario, $id);
    }

    // Ejecuta la consulta
    if ($stmt->execute()) {
        echo "Datos actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos: " . $stmt->error;
    }

    // Cierra la consulta
    $stmt->close();
} else {
    echo "Error en la preparación de la consulta: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();

}  

header("Location: index.php");

?>

