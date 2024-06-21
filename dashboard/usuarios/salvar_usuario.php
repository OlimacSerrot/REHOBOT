<?php
// Verificar si se ha enviado una solicitud POST para guardar un nuevo usuario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar_usuario'])) {
    // Obtener datos del formulario de registro
    $nombreCompleto = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $tipo = $_POST['tipo'];

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuarios (nombre_completo, usuario, correo, contraseña, tipo) VALUES ('$nombreCompleto', '$usuario', '$correo', '$contraseña', '$tipo')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Usuario guardado correctamente'); window.location.href = 'usuarios.php'; </script>";
    } else {
        echo "Error al guardar usuario: " . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}
?>