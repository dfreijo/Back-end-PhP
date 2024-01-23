<!-- crActoControlador -->
<?php

include('../../modelo/actos/create.php');
include('../../modelo/Tipo_acto/read.php');
include('../../modelo/connection.php');

function añadirEvento() {
    
    if (isset($_POST["crearActo"])) {
        $Titulo = $_POST["titulo"];
        $Descripcion_corta = $_POST["descripcion_corta"];
        $Descripcion_larga = $_POST["descripcion_larga"];
        $Fecha = $_POST["fecha"];
        $Hora = $_POST["hora"];
        $Id_tipo_acto = $_POST["id_tipo_acto"];
        $Num_asistentes = $_POST["num_asistentes"];

        $fechaFormateada = date("Y-m-d", strtotime($Fecha)); // Formatear la fecha a YYYY-MM-DD
        $horaFormateada = $Hora . ":00";
        
        $resultado_creacion = createActo($fechaFormateada,$horaFormateada,$Titulo,$Descripcion_corta,$Descripcion_larga,$Num_asistentes,$Id_tipo_acto);

        if ($resultado_creacion == 'Error al crear el evento!'){
            return 'Error al crear el evento!';
        }
        
    } 
}

function obtenerTiposDeActos() {
    
    $resultado = readTipoActos();
    if ($resultado) {
        foreach ($resultado as $tipoActo) {
            $Id_tipo_acto = $tipoActo['Id_tipo_acto'];
            $Descripcion = $tipoActo['Descripcion'];
            echo '<option value="' . $Id_tipo_acto . '">' . $Descripcion . '</option>'; 
        }
    } else {
        echo "No hay tipos de actos disponibles.";
    }
}

?>
