<!-- menuAdministrador.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Panel-Administrador</title>
    
    <!-- Incluir Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluir tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="container text-center principal" >
        <h1>Panel de Administración
        <a href="../../index.php" class="btn btn-primary button-cerrar">Cerrar sesión</a>
        </h1>
        <div class="buttons-container m-100" >
        
        <?php
        require_once '../../controlador/adminControlador.php';
    
        // Verificar si se ha hecho clic en un botón
        if (isset($_GET['action']) && $_GET['action'] == 'crearActo') {
            crearActo();
        } elseif (isset($_GET['action']) && $_GET['action'] == 'configurarActo') {
            configurarActo();
        } else {
            echo '<a href="?action=crearActo" class="btn btn-primary button-crear-evento ">AÑADIR EVENTO</a>';
            echo '<a href="?action=configurarActo" class="btn btn-primary button-configurar-evento ">CONFIGURAR EVENTO</a>';
        }
        ?>

        </div>
    </div>
</body>

</html>