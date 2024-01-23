<?php


function readInscripcion($Id_inscripcion) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Inscritos WHERE Id_inscripcion='$Id_inscripcion'");

    return $mensaje;
}

function readInscripcionPorPersona($id_persona) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Inscritos WHERE Id_persona='$id_persona'");

    return $mensaje;
}

function listarInscritosIdActo($id_acto) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Inscritos WHERE id_acto='$id_acto'");

    return $mensaje;
}

function readIActoPersonaModelo($id_acto,$id_persona_inscribir) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Inscritos WHERE id_acto='$id_acto' AND Id_persona='$id_persona_inscribir'");

    return $mensaje;
}