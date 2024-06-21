<?php
// Verificar si se ha enviado una solicitud GET para eliminar un usuario
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener el ID del usuario a eliminar
    $id = $_GET['id'];
    // Consulta SQL para eliminar el usuario
    $sql = "DELETE FROM usuarios WHERE id='$id'";
    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Usuario eliminado correctamente');
        window.location = 'usuarios.php'; </script>";
    } else {
        echo "<script>alert('Error al eliminar usuario'); 
        window.location = 'usuarios.php'; </script>" . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}
?>
