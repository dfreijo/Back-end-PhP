<?php

function createInscripcion($Id_inscripcion, $Id_persona, $id_acto, $Fecha_inscripcion) {
    
    $consulta = "INSERT INTO eventos.Inscritos (Id_inscripcion, Id_persona, id_acto, Fecha_inscripcion)
     VALUES ('$Id_inscripcion', '$Id_persona', '$id_acto', STR_TO_DATE('$Fecha_inscripcion', '%d-%m-%Y'))";

    connection::ejecutar_consulta($consulta);
    
}

function createInscripcionUsuario($id_acto, $Id_persona, $Fecha_inscripcion) {
    
    $consulta = "INSERT INTO eventos.Inscritos (Id_persona, id_acto, Fecha_inscripcion)
    VALUES ('$Id_persona', '$id_acto', STR_TO_DATE('$Fecha_inscripcion', '%Y-%m-%d'))";

    connection::ejecutar_consulta($consulta);
    
}

function InscripcionPersona($Id_persona, $id_acto) {
    
    try {
        $Fecha_inscripcion = date('Y-m-d');
        $consulta = "INSERT INTO eventos.Inscritos (Id_persona, id_acto, Fecha_inscripcion)
                     VALUES ('$Id_persona', '$id_acto', STR_TO_DATE('$Fecha_inscripcion', '%Y-%m-%d'))";
        connection::ejecutar_consulta($consulta);
        
        return ("Inscripcion exitosa");

    } catch (Exception $e) {
        
        return ("El usuario ya esta Inscrito.");
    }
    
}
