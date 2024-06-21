<?php
if(isset($_POST['actualizar_actividad'])) {
    $actividad_id = $_POST['actividad_id'];
    $usuario_id = $_POST['usuario_id'];
    $actividad = $_POST['actividad'];
    $fecha = $_POST['fecha'];

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para actualizar la actividad
    $sql = "UPDATE actividades SET usuario_id='$usuario_id', actividad='$actividad', fecha='$fecha' WHERE id='$actividad_id'";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Actividad Actualizada correctamente'); window.location = 'actividades.php'; </script>";
    } else {
        echo "<script>alert('Error al actualizar actividad'); window.location = 'actividades.php'; </script>" . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}
?>
