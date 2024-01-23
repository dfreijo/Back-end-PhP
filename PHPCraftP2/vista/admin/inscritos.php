<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Gestión-inscritos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/crear_acto.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <h1 class="text-register">Lista de eventos</h1>
                    <div class="card-body lista-actos">
                        <?php
                        require_once '../../controlador/getActoInscritosControlador.php';
                        listarActosInscritos();
                        ?>  
                    </div>
                    <a href="./gestio_acto.php" class="btn btn-primary button-atras">Atrás</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>