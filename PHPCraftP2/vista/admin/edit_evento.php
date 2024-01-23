<!-- crear_acto.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Editar-Evento</title>
    
    <!-- Incluir Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluir tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="../css/crear_acto.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <h1 class="text-register">Editar Evento</h1>
                    <div class="card-body lista-actos">
                        <?php
                        require_once '../../controlador/geActoControlador.php';
                        listarActos();
                        ?>  
                    </div>
                    <a href="./gestio_acto.php" class="btn btn-primary button-atras">Atrás</a>
                </div>
            </div>
        </div>
    </div>

    <script> 
    const botonEditar = document.querySelectorAll('.btn-editar-acto');

    botonEditar.forEach(boton => {
        boton.addEventListener('click', () => {
            const formulario = boton.nextElementSibling; // Obtener el formulario asociado al botón

            // Cambiar la visibilidad del formulario
            if (formulario.style.display === 'none' || formulario.style.display === '') {
                formulario.style.display = 'block';
            } else {
                formulario.style.display = 'none';
            }
        });
    });
    </script> 
    
</body>
</html>