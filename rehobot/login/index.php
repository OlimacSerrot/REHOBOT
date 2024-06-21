<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("location: bienvenida.php");
    exit(); // Asegúrate de agregar esta línea para evitar que el código se siga ejecutando después de la redirección
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .password-container input {
            padding-right: 30px;
            /* Espacio para el icono */
        }

        .password-container .toggle-password {
            position: absolute;
            top: 52.5%;
            right: 30px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .recuperar {
            font-size: 16px;
            color: brown;
        }
    </style>
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">
                <!-- Formulario de inicio de sesión -->
                <form action="login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>

                    <input type="text" placeholder="Correo Electrónico" name="correo">

                  <div class="password-container">
                        <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña">
                        <i class="bx bx-show-alt toggle-password" id="togglePassword"></i>
                        <br><br>
                        <a href="##" class="recuperar" >¿Olvidaste tu contraseña?</a>
                        <br>
                    </div>

                    <script>
                        document.getElementById("togglePassword").addEventListener("click", function() {
                            var contraseñaInput = document.getElementById("contraseña");
                            var tipo = contraseñaInput.getAttribute("type") === "password" ? "text" : "password";
                            contraseñaInput.setAttribute("type", tipo);
                            this.classList.toggle("bx-show-alt");
                            this.classList.toggle("bx-hide");
                        });
                    </script>


                    <form>
                        <button type="submit">Entrar</button>
                        <button style="margin-left: 100px;" type="button" onclick="window.location.href='../../index.html';">Inicio</button>
                    </form>

                </form>

                <!-- Formulario de registro -->
                <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button type="submit">Registrarse</button>

                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>

</body>

</html>