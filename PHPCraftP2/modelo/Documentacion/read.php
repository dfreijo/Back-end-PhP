<?php


function readDocumentacon($Id_presentacion) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Documentacion WHERE Id_presentacion='$Id_presentacion'");

    return $mensaje;
}
