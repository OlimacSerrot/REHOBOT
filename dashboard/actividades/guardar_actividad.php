<?php
// Verificar si se ha enviado una solicitud POST para guardar una nueva actividad
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['agregar_actividad'])) {
    // Obtener datos del formulario de registro
    $usuario_id = $_POST['usuario_id'];
    $actividad = $_POST['actividad'];

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para insertar una nueva actividad
    $sql = "INSERT INTO actividades (usuario_id, actividad) VALUES ('$usuario_id', '$actividad')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Actividad guardada correctamente'); window.location = 'actividades.php'; </script>";
    } else {
        echo "Error al guardar la actividad: " . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}
?>
