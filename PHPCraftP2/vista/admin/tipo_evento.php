<!-- tipo_evento.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Configurar-Tipo Evento</title>
    
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
                        <h1 class="text-register">Gestión Tipo de Evento</h1>
                        <div class="card-body lista-actos">
                            <?php
                            include("../../controlador/geActoControlador.php");
                            listarTipoActos();
                            ?>  
                        </div>
                        <button class="btn btn-primary" id="btnMostrarFormulario">Agregar</button>
                                
                            <!-- Formulario de registro Tipo Acto-->
                            <form class="border p-3" action="./tipo_evento.php" method="post" id="formularioCrearTipoActo" style="display: none;">
                                <div class="form-group">
                                    <label for="Descripcion">Descripcion del tipo de Acto</label>
                                    <input type="text" name="Descripcion" class="form-control" required>
                                </div>      
                                <button type="submit" name="añadirTipoActo" class="btn btn-agregar">Crear Tipo Acto</button> 
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                        $mensaje = añadirTipoActo();
                                    
                                        if ($mensaje === 'Error agregando el tipo de acto!') {
                                            echo "<p style='color:red; margin-top:15px'>Error al registrar el tipo de Acto</p>";
                                        } else {
                                            echo '<meta http-equiv="refresh" content="0;url=./tipo_evento.php">';
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
        const formulario = document.getElementById("formularioCrearTipoActo");
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