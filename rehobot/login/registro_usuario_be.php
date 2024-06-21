<?php

// Incluye el archivo de conexión a la base de datos
include 'conexion_be.php';

// Obtiene los datos del formulario
$nombre_completo = $_POST['nombre_completo'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$tipo_usuario_id = 2; // Aquí asumimos que el tipo de usuario es 2, pero debes ajustar esto según tu lógica.

// Verifica si el usuario ya está registrado
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
        alert("Este usuario ya está registrado, intente con otro");
        window.location = "index.php";
    </script>';
    exit();
}

// Verifica si el correo ya está registrado
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
        alert("Este correo ya está registrado, intente con otro");
        window.location = "index.php";
    </script>';
    exit();
}

// Prepara la consulta de inserción
$query = "INSERT INTO usuarios(`nombre_completo`, `usuario`, `correo`, `contraseña`, `tipo`) VALUES('$nombre_completo', '$usuario', '$correo', '$contraseña', $tipo_usuario_id)";

// Ejecuta la consulta de inserción
$ejecutar = mysqli_query($conexion, $query);

// Verifica si la consulta se ejecutó con éxito
if($ejecutar){
    echo '
    <script>
        alert("El usuario ha sido almacenado exitosamente");
        window.location = "index.php";
    </script>';
} else {
    echo '
    <script>
        alert("Error al insertar el usuario: ' . mysqli_error($conexion) . '");
        window.location = "index.php";
    </script>';
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);

?>
