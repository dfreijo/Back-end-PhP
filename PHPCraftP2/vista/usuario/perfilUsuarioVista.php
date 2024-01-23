<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$username = isset($_GET['username']) ? $_GET['username'] : '';

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Configuración del documento -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>     
        <div class="container"> 
            <div class="row"> 
                <div class="col-4">
                    <div class="card"> 
                        <div class="card-body">
                            <h1 class="text-login">Modificar</h1>
                            <form action="./perfilUsuarioVista.php" method="post">

                                <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">

                                <div class="form-group">
                                    <label for="usuario">Usuario:</label>
                                    <input type="text" id="usuario" name="usuario" class="form-control"  placeholder="<?php echo $username?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="contrasena">Contraseña:</label>
                                    <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="<?php echo $password?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input id="email" name="email" class="form-control" placeholder="<?php echo $email?>" required>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center flex-nowrap mt-3">
                                    <button type="submit" name="updateUsuario" class="btn btn-block btn-primary align-self-start mr-2">Modificar</button>
                                    <button onclick="redirectToUsuarioVista('<?php echo urlencode($id); ?>', '<?php echo urlencode($username); ?>', '<?php echo urlencode($password); ?>', '<?php echo urlencode($email); ?>')" class="btn btn-block btn-secondary align-self-end">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 

include('../../modelo/Usuarios/update.php');
include('../../modelo/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["updateUsuario"])) {
        $id = $_POST["id_usuario"];
        $username = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $email = $_POST["email"];
        echo " Modificar este id:  " . $id . "<br>"; 
        updatePerfilUsuario($id,$username,$contrasena,$email);     
        echo "<script>window.location.href='./usuarioVista.php?id_usuario=" . urlencode($id) 
        . "&username=" . urlencode($username) 
        . "&password=" . urlencode($contrasena) 
        . "&email=" . urlencode($email) 
        . "';</script>";
        exit(); 
    }
}
?>

<script>
    function redirectToUsuarioVista(id, username, password, email) {
        var url = './usuarioVista.php?id_usuario=' + id + '&username=' + username + '&password=' + password + '&email=' + email;
        window.location.href = url;
        exit();
    }
</script>