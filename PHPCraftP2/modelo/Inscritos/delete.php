<?php


function deleteInscripcion($Id_inscripcion) {
 
    $consulta = "DELETE FROM eventos.Inscritos WHERE Id_inscripcion = '$Id_inscripcion'";

    connection::ejecutar_consulta($consulta);

}

function deleteInscripcionUsuario($id_acto,$id_persona) {
 
    $consulta = "DELETE FROM eventos.Inscritos WHERE id_acto = '$id_acto' AND Id_persona = '$id_persona'";

    connection::ejecutar_consulta($consulta);

}