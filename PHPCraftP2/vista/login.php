<!-- login.php -->
<!DOCTYPE html>
<html lang="es">

    <head>
        <!-- Configuración del documento -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vista/css/login.css">
    </head>

    <body>     
        <div class="container"> 
            <div class="row"> 
                <div class="col-4"> <!-- Tamaño de columna -->
                    <div class="card"> 
                        <div class="card-body">
                            <h1 class="text-login">Log In</h1> <!-- Centro el encabezado -->
                            
                            <?php
                                // Muestra mensajes de éxito o error si existe la variable $mensaje
                                if (isset($mensaje)) {
                                    echo "<p class='alert alert-info'>$mensaje</p>";
                                }
                            ?>

                            <!-- Formulario de inicio de sesión -->
                            <!--<form action="index.php?action=procesarLogin" method="post">-->
                            <form action="../controlador/loginControlador.php" method="post">
                                <!-- Campo de usuario -->
                                <div class="form-group">
                                    <label for="usuario">Usuario:</label>
                                    <input type="text" id="usuario" name="usuario" class="form-control" required>
                                </div>

                                <!-- Campo de contraseña -->
                                <div class="form-group">
                                    <label for="contrasena">Contraseña:</label>
                                    <input type="password" id="contrasena" name="contrasena" class="form-control" required>
                                </div>

                                <!-- Botón de envío del formulario -->
                                <button type="submit" name="loginUsuario" class="btn btn-primary btn-block">Iniciar sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>