<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="estilosU.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <h2>Admin</h2>
            </div>
            <div class="search">
                <input type="text" id="search" aria-placeholder="search here">
                <label for="search"> <i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-right-to-bracket"><a href="../../rehobot/login/cerrar_sesion.php">Cerrar sesión</a></i>
            <div class="user">
                <img src="../img/user.png" alt="">
                <a href="../../rehobot/login/cerrar_sesion.php">Cerrar sesión</a>
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="../index.php">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="##">
                        <i class="fas fa-users"></i>
                        <div>Usuarios</div>
                    </a>
                </li>
                <li>
                    <a href="../actividades/actividades.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Actividades</div>
                    </a>
                </li>
                <li>
                    <a href="../donaciones/donaciones.php">
                        <i class="fas fa-users"></i>
                        <div>donaciones</div>
                    </a>
                </li>
                <li>
                    <a href= "../../Calendario original">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>calendario</div>
                    </a>
                </li>
                <li>
                    <a href= "../planilla/planilla.php">
                        <i class="fas fa-user-graduate"></i>
                        <div>planilla</div>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <main class="table" id="customers_table">
            <section class="table__header">
                <h1>Tabla de usuarios</h1>
                <div class="input-group">
                    <input type="search" placeholder="buscar usuario">
                </div>
                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox"  id="export-file">
                    <div class="export__file-options">
                        <label>Descargar&nbsp; &#10140;</label>
                        <label for="export-file" id="toPDF">PDF </label>
                    </div>
                </div>
            </section>
            <section class="table__body">
                <thead>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Completo</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                        <?php
                        // Conexión a la base de datos
                        $conexion = new mysqli("localhost", "root", "", "fundacion");
                        // Verificar conexión
                        if ($conexion->connect_error) {
                            die("Error de conexión: " . $conexion->connect_error);
                        }
                        // Consulta SQL para obtener los usuarios
                        $sql = "SELECT * FROM usuarios";
                        $resultado = $conexion->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $fila['id'] . "</td>";
                                echo "<td>" . $fila['nombre_completo'] . "</td>";
                                echo "<td>" . $fila['usuario'] . "</td>";
                                echo "<td>" . $fila['correo'] . "</td>";
                                echo "<td>" . $fila['contraseña'] . "</td>";
                                echo "<td>" . $fila['tipo'] . "</td>";
                                // Botones de acción con iconos de Font Awesome
                                echo "<td>";
                                echo "<a href='editar_usuario.php?id=" . $fila['id'] . "'><button class='edit-button'>Editar</button></a>";
                                echo "<a href='eliminar_usuario.php?id=" . $fila['id'] . "'><button class='delete-button'>Eliminar</button></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No hay usuarios registrados</td></tr>";
                        }
                        // Cerrar conexión
                        $conexion->close();
                        ?>
                    </table>
            </section>
            <div class="add-user-form" id="add-user-form">

                <h2>Agregar Nuevo Usuario</h2>
                <form method="post" action="salvar_usuario.php">
                    <label for="nombre_completo">Nombre Completo:</label>
                    <input type="text" id="nombre_completo" name="nombre_completo" required>
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required>
                    <label for="correo">Correo:</label>
                    <input type="text" id="correo" name="correo" required>
                    <label for="contraseña">Contraseña:</label>
                    <input type="text" id="contraseña" name="contraseña" required>
                    <label for="tipo">Tipo:</label>
                    <input type="text" id="tipo" name="tipo" required>
                    <input type="submit" name="guardar_usuario" value="Agregar Usuario">
                </form>
            </div>
        </main>
<script src="../script.js"></script>
</body>

</html>