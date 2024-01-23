<?php

function updateActo($Id_acto, $Fecha, $Hora, $Titulo, $Descripcion_corta, $Descripcion_larga, $Num_asistentes, $Id_tipo_acto) {

    $consulta = "UPDATE eventos.Actos SET Fecha = '$Fecha', Hora = '$Hora', Titulo = '$Titulo', Descripcion_corta = '$Descripcion_corta', 
    Descripcion_larga = '$Descripcion_larga', Num_asistentes = '$Num_asistentes', Id_tipo_acto = '$Id_tipo_acto' WHERE Id_acto = '$Id_acto'";

    connection::ejecutar_consulta($consulta);
}