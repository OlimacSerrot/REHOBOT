<?php
// Verificar si se ha enviado un ID válido
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $actividad_id = $_GET['id'];

    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "fundacion");
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para obtener la actividad con el ID proporcionado
    $sql = "SELECT * FROM actividades WHERE id = $actividad_id";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Mostrar el formulario para editar la actividad
        $actividad = $resultado->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar Actividad</title>
            <link rel="stylesheet" href="styles.css">
            <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
        </head>

        <body>
            <div class="container">
                <div class="main">
                    <h2>Editar Actividad</h2>
                    <form method="post" action="actualizar_actividad.php">
                        <input type="hidden" name="actividad_id" value="<?php echo $actividad['id']; ?>">
                        <label for="usuario_id">ID de Usuario:</label>
                        <input type="text" id="usuario_id" name="usuario_id" value="<?php echo $actividad['usuario_id']; ?>" required>
                        <label for="actividad">Actividad:</label>
                        <input type="text" id="actividad" name="actividad" value="<?php echo $actividad['actividad']; ?>" required>
                        <label for="fecha">Fecha:</label>
                        <input type="datetime-local" id="fecha" name="fecha" value="<?php echo $actividad['fecha']; ?>" required>
                        <input type="submit" name="actualizar_actividad" value="Actualizar Actividad">
                    </form>
                </div>
            </div>
        </body>

        </html>
        <?php
    } else {
        echo "No se encontró la actividad con el ID proporcionado.";
    }

    // Cerrar conexión
    $conexion->close();
} else {
    echo "ID de actividad no proporcionado.";
}
?>
