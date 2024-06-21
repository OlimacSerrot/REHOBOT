<?php
$conexion = new mysqli("localhost", "root", "", "fundacion");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$sql = "SELECT Count(*) AS TotalUsuarios FROM usuarios";
$result = $conexion->query($sql);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalUsuarios = $row['TotalUsuarios'];
} else {
    $totalUsuarios = 0; // Valor por defecto si no hay resultados
}
$sql_actividades = "SELECT Count(*) AS TotalActividades FROM actividades";
$result_actividades = $conexion->query($sql_actividades);
if ($result_actividades && $result_actividades->num_rows > 0) {
    $row_actividades = $result_actividades->fetch_assoc();
    $totalActividades = $row_actividades['TotalActividades'];
} else {
    $totalActividesdes = 0;
}
$sql_suma_donaciones = "SELECT SUM(cantidad) AS total FROM donaciones";
$result_suma_donaciones = $conexion->query($sql_suma_donaciones);


if ($result_suma_donaciones && $result_suma_donaciones->num_rows > 0) {
    $row_suma_donaciones = $result_suma_donaciones->fetch_assoc();
    $totalDonaciones = $row_suma_donaciones['total'];
} else {
    $totalDonaciones = 0;
}
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="styles.css">
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
            <i class="fas fa-right-to-bracket"><a href="../rehobot/login/cerrar_sesion.php">Cerrar sesión</a></i>
            <div class="user">
                <img src="img/user.png" alt="">
                <a href="../rehobot/login/cerrar_sesion.php">Cerrar sesión</a>
            </div>
            
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="##">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="usuarios/usuarios.php">
                        <i class="fas fa-user-graduate"></i>
                        <div>Usuarios</div>
                    </a>
                </li>
                <li>
                    <a href="actividades/actividades.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Actividades</div>
                    </a>
                </li>
                <li>
                    <a href="donaciones/donaciones.php">
                        <i class="fas fa-users"></i>
                        <div>donaciones</div>
                    </a>
                </li>
                <li>
                    <a href= "../Calendario original">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>calendario</div>
                    </a>
                </li>
                <li>
                    <a href= "planilla/planilla.php">
                        <i class="fas fa-user-graduate"></i>
                        <div>planilla</div>
                    </a>
                </li>

            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">
                            <?php echo $totalUsuarios; ?>
                        </div>
                        <div class="card-name">usuarios</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">
                            <?php echo $totalActividades; ?>
                        </div>
                        <div class="card-name">Actividades</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">
                            <?php echo $totalDonaciones; ?>
                        </div>
                        <div class="card-name">monto recaudado</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="charts">
                </div>
            </div>
        </div>
    </div>

</body>

</html>