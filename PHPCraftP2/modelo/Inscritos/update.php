<?php

function updateInscripcion($Id_inscripcion, $Id_persona, $id_acto, $Fecha_inscripcion) {
    
    $consulta = "UPDATE eventos.Inscritos SET Fecha_inscripcion = STR_TO_DATE('$Fecha_inscripcion', '%d-%m-%Y'), Id_persona = '$Id_persona', id_acto = '$id_acto'  
    WHERE Id_inscripcion = '$Id_inscripcion'";

    connection::ejecutar_consulta($consulta);
    
}