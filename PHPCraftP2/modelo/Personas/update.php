<?php


function updatePersonas($id, $nombre, $apellido1, $apellido2) {

    //Se actualiza segun el ID proporcionado.
    $consulta = "UPDATE eventos.Personas SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2' WHERE id_persona='$id'";

    connection::ejecutar_consulta($consulta);
}
