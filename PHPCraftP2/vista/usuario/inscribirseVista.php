
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Inscripciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-register">Inscripciones</h1>

                        <?php
                            $id = isset($_GET['id']) ? $_GET['id'] : '';
                            $password = isset($_GET['password']) ? $_GET['password'] : '';
                            $email = isset($_GET['email']) ? $_GET['email'] : '';
                            $username = isset($_GET['username']) ? $_GET['username'] : '';

                            require_once '../../controlador/inscribirUsuarioControlador.php';
                            $resultados = obtenerActos();
                            $actosPersonas = leerActosDePersona($id);

                            $actosPersonaIds = array(); // Inicializa un array para almacenar los IDs de actos de la persona

                            // Verifica si $actosPersonas es iterable y convierte los resultados en un array de IDs de actos
                            if ($actosPersonas && is_iterable($actosPersonas)) {
                                foreach ($actosPersonas as $actoPersona) {
                                    $actosPersonaIds[] = $actoPersona['id_acto'];
                                }
                            }
                            
                            if ($resultados && is_iterable($resultados)) {
                                foreach ($resultados as $acto) {
                                    $Id_acto = $acto['Id_acto'];
                                    $Titulo = $acto['Titulo'];
                                    $Descripcion_corta = $acto['Descripcion_corta'];
                                    $Descripcion_larga = $acto['Descripcion_larga'];
                                    $Fecha = $acto['Fecha'];
                                    $Hora = $acto['Hora'];
                                    $Id_tipo_acto = $acto['Id_tipo_acto'];
                                    $Num_asistentes = $acto['Num_asistentes'];
                            
                                    // Verifica si el Id_acto no está en la lista de Id_acto_persona
                                    if (!in_array($Id_acto, $actosPersonaIds)) {
                                        echo "<div class='inscripcion'>";
                                        echo "<h3 class='mb-4'>$Titulo</h3>";
                                        echo "<p>Fecha: $Fecha | Hora: $Hora</p>";
                                        echo "<p>$Descripcion_corta</p>";
                                        // Resto del código para mostrar el formulario...
                                        echo "<form action='inscribirseVista.php' method='post'>";
                                        echo "<input type='hidden' name='id_acto' value='$Id_acto'>"; 
                                        echo "<input type='hidden' name='id_persona' value='$id'>";
                                        echo "<input type='hidden' name='password' value='$password'>";
                                        echo "<input type='hidden' name='email' value='$email'>";
                                        echo "<input type='hidden' name='username' value='$username'>";
                                        echo "<button type='submit' name='inscribirse' class='btn btn-primary btn-inscripcion'>Inscribirse</button>";
                                        echo "</form>";
                                        echo "</div>";
                                    }
                                }
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (isset($_POST["inscribirse"])) {
                                    
                                    $id_acto = $_POST["id_acto"];
                                    $id_persona = $_POST["id_persona"];
                                    $password = $_POST["password"];
                                    $email = $_POST["email"];
                                    $username = $_POST["username"];

                                    $currentDate = date('Y-m-d');
                                    inscribirseEnActo($id_acto,$id_persona,$currentDate);
                                    // Redireccionar con los parámetros GET
                                    echo "<script>
                                        window.location.href = '{$_SERVER['PHP_SELF']}?id=$id_persona&password=$password&email=$email&username=$username';
                                    </script>";
                                    exit(); 
                                }
                            }

                        ?>
                        </br>
                        <button onclick="redirectToUsuarioVista('<?php echo urlencode($id); ?>', '<?php echo urlencode($username); ?>', '<?php echo urlencode($password); ?>', '<?php echo urlencode($email); ?>')" class="btn btn-primary align-self-end">Volver</button>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function redirectToUsuarioVista(id, username, password, email) {
        var url = './usuarioVista.php?id_usuario=' + id + '&username=' + username + '&password=' + password + '&email=' + email;
        window.location.href = url;
        exit();
    }
    </script>
</body>
</html>

