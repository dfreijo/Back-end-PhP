<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscribify | Registro de Usuario</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../vista/css/registro.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-register text-center">Menu Ponente</h1>
                            <?php
                            if (isset($_GET['var1'])) {
                                $var1 = $_GET['var1'];
                                echo "Este producto no se contempla el desarrollo del menú Ponente";
                                echo "<a href='../../index.php' class='btn btn-primary button-cerrar'>Atrás</a>";

                            } else {
                                echo "No se han recibido las variables correctamente.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>