<!-- loginControlador -->
<?php
include('../modelo/Usuarios/read.php');
include('../modelo/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["loginUsuario"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $username = "";
        $mensaje = existeUsuario($usuario, $contrasena);
        
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                $id_usuario = $fila['Id_usuario'];
                $id_tipo_usuario = $fila['Id_tipo_usuario'];

                $username = $fila['Username'];
                $Password = $fila['Password'];
                $Email = $fila['Email'];

                if ($id_tipo_usuario == 1) {
                    echo "<script>window.location.href='../vista/usuario/usuarioVista.php?id_usuario=" . urlencode($id_usuario) 
                    . "&username=" . urlencode($username) 
                    . "&password=" . urlencode($Password) 
                    . "&email=" . urlencode($Email) 
                    . "';</script>";
                    exit(); 
                } elseif ($id_tipo_usuario == 2) {
                    echo "<script>window.location.href='../vista/ponente/ponenteVista.php?var1=" . urlencode($id_usuario) . "';</script>";
                    exit(); 
                } elseif ($id_tipo_usuario == 3) {
                    echo "<script>window.location.href='../vista/admin/menuAdministracion.php';</script>";
                    exit();
                }
            }

            if ($username != $usuario) {

                echo "<!DOCTYPE html>";
                echo "<html lang='es'>";
                echo "<head>";
                    echo "<meta charset='utf-8' />";
                    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
                    echo "<title>Inscribify | Registro de Usuario</title>";
                    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>";
                    echo "<link rel='stylesheet' href='../vista/css/registro.css'>";
                echo "</head>";
                
                echo "<body>";
                    echo "<div class='container'>";
                        echo "<div class='row'>";
                            echo "<div class='col-6'>";
                                echo "<div class='card'>";
                                    echo "<div class='card-body'>";
                                        
                                        echo "<h1 style='color:red;'>No existe el usuario\n</h1>";
                                        echo "<a href='../index.php' class='btn btn-primary button-cerrar'>Atrás</a>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</body>";
                echo "</html>";
            }
        } else {
            echo "Error en la consulta\n";
        }
    }
}
?>
