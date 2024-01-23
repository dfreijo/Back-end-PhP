<?php

function createActo($Fecha,$Hora,$Titulo,$Descripcion_corta,$Descripcion_larga,$Num_asistentes,$Id_tipo_acto) {
    
    try {
        $consulta = "INSERT INTO eventos.Actos (Fecha, Hora, Titulo, Descripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto) 
        VALUES ('$Fecha', '$Hora', '$Titulo', '$Descripcion_corta', '$Descripcion_larga', '$Num_asistentes', '$Id_tipo_acto')"; 

        $resultado = connection::ejecutar_consulta($consulta);
    }catch (PDOException $e) {
        
        return 'Error al crear el evento!';
    }
}