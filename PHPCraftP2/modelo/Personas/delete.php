<?php


function deletePersona($id_persona) {
 
    $consulta = "DELETE FROM eventos.Personas WHERE id_persona = '$id_persona'";

    connection::ejecutar_consulta($consulta);

}
