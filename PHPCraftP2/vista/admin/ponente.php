<!-- ponente.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Configurar-Ponente</title>
    
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
                        <h1 class="text-register">Gestión Ponente</h1>
                        <div class="card-body lista-actos">
                            <?php
                            include("../../controlador/geActoControlador.php");
                            listarPonentes();
                            ?>  
                        </div>
                        <button class="btn btn-primary" id="btnMostrarFormulario">Agregar</button>
                                
                            <!-- Formulario de registro Ponente-->
                            <form class="border p-3" action="./ponente.php" method="post" id="formularioCrearPonente" style="display: none;">
                                <div class="form-group">
                                    <label for="id_persona">ID personal</label>
                                    <select name="id_persona" class="form-control" required>
                                    <?php 
                                    listarPersona();
                                    ?> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_acto">ID evento</label>
                                    <select name="id_acto" class="form-control" required>
                                    <?php
                                    listarActo();
                                    ?> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="orden">Orden de aparición</label>
                                    <input type="number" name="orden" class="form-control" required>
                                </div>      
                                <button type="submit" name="añadirPonente" class="btn btn-agregar">Crear Ponente</button> 
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                        $mensaje = añadirPonentes();
                                    
                                        if ($mensaje === 'Error al añadir ponente!') {
                                            echo "<p style='color:red; margin-top:15px'>Error al registrar el ponente</p>";
                                        } else {
                                            echo '<meta http-equiv="refresh" content="0;url=./ponente.php">';
                                            exit();
                                        }
                                    }
                                ?>   
                            </form>
                        <a href="./gestio_acto.php" class="btn btn-primary button-atras">Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const formulario = document.getElementById("formularioCrearPonente");
        const btnMostrarFormulario = document.getElementById("btnMostrarFormulario");
        const btnCancelar = document.getElementById("btnCancelar");

        btnMostrarFormulario.addEventListener("click", function() {
            if (formulario.style.display === "none" || formulario.style.display === "") {
                formulario.style.display = "block";
                btnMostrarFormulario.textContent = "Cancelar";
            } else {
                formulario.style.display = "none";
                btnMostrarFormulario.textContent = "Agregar";
            }
        });

        btnCancelar.addEventListener("click", function() {
            formulario.style.display = "none";
            btnMostrarFormulario.textContent = "Agregar PONENTE";
        });
    </script>
    <script>
            // Obtiene todos los botones de "Editar" por su clase
        const botonesEditar = document.querySelectorAll(".btn-editar-acto");

        // Itera sobre cada botón y agrega un evento al hacer clic
        botonesEditar.forEach(boton => {
            boton.addEventListener("click", () =>{
                // Encuentra el formulario correspondiente basado en el botón clicado
                const formularioEditar = boton.nextElementSibling;
                
                // Muestra u oculta el formulario alternando su estado
                if (formularioEditar.style.display === "none" || formulario.style.display === "") {
                    formularioEditar.style.display = "block";
                } else {
                    formularioEditar.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>