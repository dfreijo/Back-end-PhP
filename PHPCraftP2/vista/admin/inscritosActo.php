<?php
require_once '../../controlador/getActoInscritosControlador.php';

if(isset($_GET['id_acto'])) {
    $id_acto = $_GET['id_acto'];
    $titulo = $_GET['titulo'];
} else {
    echo "No se proporcionó ningún ID.";
}

if(isset($_GET['id_persona_seleccionada'])){
    $id_acto_desinscribir = $_GET['id_acto'];
    $id_persona = $_GET['id_persona_seleccionada'];
    deleteInscrito($id_acto_desinscribir,$id_persona);
}

if(isset($_GET['id_persona_inscribir'])){
    $id_acto_desinscribir = $_GET['id_acto'];
    $id_persona = $_GET['id_persona_inscribir'];
    $mensaje = crearInscripcion($id_persona, $id_acto_desinscribir);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Lista-inscritos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/usuarioVista.css">
</head>
<body>
    <div class="container">
            <div class="jumbotron mt-3 text-center">
                <h1 class="display-4 mb-5">Evento: <?php echo $titulo; ?></h1>
            
                <button class="btn btn-primary mr-2" onclick="window.location.href='inscritosActo.php?view=inscribir&id_acto=<?php echo $id_acto; ?>&titulo=<?php echo $titulo; ?>'">Inscribir</button>
                <button class="btn btn-primary mr-2" onclick="window.location.href='inscritosActo.php?view=desinscribir&id_acto=<?php echo $id_acto; ?>&titulo=<?php echo $titulo; ?>'">Desincribir</button>
            </div>
        
        <div class="view">
                <!-- Contenido que se mostrará aquí según se haga clic en los botones -->
        
        <?php

        if(isset($_GET['view'])) {
            $view = $_GET['view'];
            /* ******************************************************************************************************************************/
            if ($view === 'desinscribir') {
                echo "<div class='container-inscritos'>";
                echo "<h3 class='mb-5'> Inscritos en el Acto: </h3>";
                $inscritos = listarInscritosIdAct($id_acto);
                if ($inscritos) {
                    foreach ($inscritos as $inscrito) {
                        $id_persona = $inscrito['Id_persona'];
                        //echo "ID Persona: " . $id_persona . " ID Acto: " . $id_acto . "<br>";
                        $personas = getPersonaPorId($id_persona);
                        foreach($personas as $persona){
                            $id_persona_seleccionada = $persona['Id_persona'];
                            $nombre = $persona['Nombre'];
                            $apellido1 = $persona['Apellido1'];
                            $apellido2 = $persona['Apellido2'];
                            echo "<div class='container-inscrito'>";
                            echo "<p> Nombre: " . $nombre . " " . $apellido1 . " " . $apellido2 . "</p>";
                            echo "<form method='get' action='inscritosActo.php'>";
                            echo '<input type="hidden" name="id_acto" value="' . $id_acto . '">';
                            echo '<input type="hidden" name="titulo" value="' . $titulo . '">';
                            echo '<input type="hidden" name="id_persona_seleccionada" value="' . $id_persona_seleccionada . '">';
                            echo '<input type="hidden" name="view" value="desinscribir">';
                            echo '<button class="btn btn-primary inscribirse" type="submit" name="desinscribirse" value="desinscribirse">DesInscribir</button>';
                            echo '</form>';
                            echo "<br>";
                            echo "</div>";
                        }
                    }
                }
            }
            /* ******************************************************************************************************************************/
            if ($view === 'inscribir') {
                $personas = getAllPersonas();
                echo "<div class='container-inscritos'>";
                echo "<h3 class='mb-5'> No Inscritos en el Acto: </h3>";
                foreach($personas as $persona){
                    $id_persona_inscribir = $persona['Id_persona'];
                    $nombre = $persona['Nombre'];
                    $apellido1 = $persona['Apellido1'];
                    $apellido2 = $persona['Apellido2'];
                    $resultado = readIActoPersona($id_acto,$id_persona_inscribir);
                    if($resultado->rowCount() === 0){
                        echo "<div class='container-inscrito'>";
                        echo " Nombre: " . $nombre . " " . $apellido1 . " " . $apellido2 . " ";
                        echo "<form method='get' action='inscritosActo.php'>";
                        echo '<input type="hidden" name="id_acto" value="' . $id_acto . '">';
                        echo '<input type="hidden" name="titulo" value="' . $titulo . '">';
                        echo '<input type="hidden" name="id_persona_inscribir" value="' . $id_persona_inscribir . '">';
                        echo '<input type="hidden" name="view" value="inscribir">';
                        echo '<button class="btn btn-primary inscribirse" type="submit" name="inscribirse" value="inscribirse">Inscribir</button>';
                        echo '</form>';
                        echo "<br>";
                        echo "</div>";
                    }
                }
            }
        }
        echo "</div>";
        ?>
        <a href="./inscritos.php" class="btn btn-primary button-atras">Atrás</a>
        </div>
    </div>
</body>
</html>