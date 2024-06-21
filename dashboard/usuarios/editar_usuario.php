<?php
// Verificar si se ha enviado una solicitud POST para actualizar un usuario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editar_usuario'])) {
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener datos del formulario de edición
    $id = $_POST['id'];
    $nombreCompleto = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $tipo = $_POST['tipo'];

    // Consulta SQL para actualizar el usuario
    $sql = "UPDATE usuarios SET nombre_completo='$nombreCompleto', usuario='$usuario', correo='$correo', contraseña='$contraseña', tipo='$tipo' WHERE id='$id'";

    if ($conexion->query($sql) === TRUE) {
        echo '
        <script>
        alert("usuario actualizado correctamente");
        window.location = "usuarios.php";
        </script>';
        
    } else {
        echo '
        <script>
        alert("Error al actualizar usuario");
        window.location = "usuarios.php";
        </script>' . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}

// Verificar si se ha enviado una solicitud GET para obtener los datos del usuario a editar
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener el ID del usuario a editar
    $id = $_GET['id'];

    // Consulta SQL para obtener los datos del usuario
    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Obtener los datos del usuario
        $usuario = $resultado->fetch_assoc();
    } else {
        echo "No se encontró ningún usuario con ese ID";
    }

    // Cerrar conexión
    $conexion->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Usuario</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" value="<?php echo $usuario['nombre_completo']; ?>">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?php echo $usuario['usuario']; ?>">
            <label for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" value="<?php echo $usuario['correo']; ?>">
            <label for="contraseña">Contraseña:</label>
            <input type="text" id="contraseña" name="contraseña" value="<?php echo $usuario['contraseña']; ?>">
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $usuario['tipo']; ?>">
            <input type="submit" name="editar_usuario" value="Actualizar">
        </form>
    </div>
</body>
</html>
