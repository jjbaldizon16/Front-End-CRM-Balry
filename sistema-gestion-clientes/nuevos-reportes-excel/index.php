<?php
// Redirigir a una página web específica
$pagina_redireccion = "../index.php";
header("Location: $pagina_redireccion");
exit; // Asegúrate de salir del script después de la redirección
?>