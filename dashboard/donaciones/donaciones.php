<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="estilosD.css">
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
                    <a href="../usuarios/usuarios.php">
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
                    <a href="##">
                        <i class="fas fa-users"></i>
                        <div>Donaciones</div>
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
        <main class="table" id="customers_table">
            <section class="table__header">
                <h1>Tabla de Donaciones</h1>
                <div class="input-group">
                    <input type="search" placeholder="buscar usuario">
                </div>
                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox" id="export-file">
                    <div class="export__file-options">
                        <label>Descargar&nbsp; &#10140;</label>
                        <label for="export-file" id="toPDF">PDF </label>
                    </div>
                </div>
            </section>
            <section class="table__body">
                <section class="table__body">
                    <thead>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>ID de Usuario</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                            </tr>
                            <?php
                            // Conexión a la base de datos
                            $conexion = new mysqli("localhost", "root", "", "fundacion");

                            // Verificar conexión
                            if ($conexion->connect_error) {
                                die("Error de conexión: " . $conexion->connect_error);
                            }

                            // Consulta SQL para obtener las donaciones
                            $sql = "SELECT * FROM donaciones";
                            $resultado = $conexion->query($sql);

                            if ($resultado->num_rows > 0) {
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $fila['id'] . "</td>";
                                    echo "<td>" . $fila['usuario_id'] . "</td>";
                                    echo "<td>" . $fila['cantidad'] . "</td>";
                                    echo "<td>" . $fila['fecha'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No hay donaciones registradas</td></tr>";
                            }

                            // Cerrar conexión
                            $conexion->close();
                            ?>
                        </table>
                </section>
        </main>
    </div>


    </div>
    <script src="../script.js"></script>
</body>

</html>