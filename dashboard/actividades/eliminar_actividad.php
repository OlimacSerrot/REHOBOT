<?php
// Verificar si se ha enviado una solicitud GET con un ID de actividad a eliminar
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_actividad = $_GET['id'];

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para eliminar la actividad
    $sql = "DELETE FROM actividades WHERE id = $id_actividad";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Actividad eliminada correctamente'); window.location = 'actividades.php'; </script>";
    } else {
        echo "Error al eliminar la actividad: " . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}
?>
