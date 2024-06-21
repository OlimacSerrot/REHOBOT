<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' AND contraseña = '$contraseña'");

if (mysqli_num_rows($validar_login) > 0) {
    $usuario = mysqli_fetch_assoc($validar_login);

    // Guardar el tipo de usuario en la sesión
    $_SESSION['usuario'] = $usuario['correo'];
    $_SESSION['tipo_usuario'] = $usuario['tipo'];

    // Redireccionar según el tipo de usuario
    switch ($usuario['tipo']) {
        case 1: // Administrador
            header("location: ../../dashboard/index.php");
            break;
        case 2: // Usuario
            header("location: bienvenida.php");
            break;
        case 3: // Voluntario
            header("location: bienvenida.php");
            break;
        default:
            // Manejar caso de tipo de usuario no válido
            echo '<script>alert("Tipo de usuario no válido"); window.location = "index.php";</script>';
            exit();
    }
} else {
    echo '
    <script>
        alert("Este usuario no existe, por favor verifique los datos introducidos");
        window.location = "index.php";
    </script>';
    exit();
}

?>
