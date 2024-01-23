<!-- gestio_acto.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Configurar-Evento</title>
    
    <!-- Incluir Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluir tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="../css/gestio_acto.css">
</head>

<div class="container text-center principal">
        <h1>Configuración Evento</h1>
        <div class="buttons-container">
            <div class="button-group">
                <?php
                require_once '../../controlador/geActoControlador.php';
                // Verificar si se ha hecho clic en un botón
                if (isset($_GET['action']) && $_GET['action'] == 'editarActo') {
                    editarActo();
                } elseif (isset($_GET['action']) && $_GET['action'] == 'confiPonente') {
                    confiPonente();
                } else {
                    echo '<a href="?action=editarActo" class="btn btn-primary button-editar-evento">EDITAR EVENTO</a>';
                    echo '<a href="?action=confiPonente" class="btn btn-primary button-ponente">GESTIÓN PONENTES</a>';
                }
                ?>
            </div>
            <div class="button-group">
                <?php
                if (isset($_GET['action']) && $_GET['action'] == 'editarTipoEvento') {
                    editarTipoEvento();
                } elseif (isset($_GET['action']) && $_GET['action'] == 'adminInscritos') {
                    adminInscritos();
                } else {
                    echo '<a href="?action=editarTipoEvento" class="btn btn-primary button-crear-tipoActo">GESTIÓN TIPOS EVENTO</a>';
                    echo '<a href="?action=adminInscritos" class="btn button-configurar-inscritos">GESTIÓN INSCRITOS</a>';
                }
                ?>
            </div>
        </div>
        <a href="./menuAdministracion.php" class="btn button-atras">Atrás</a>
    </div>
</body>
</html>