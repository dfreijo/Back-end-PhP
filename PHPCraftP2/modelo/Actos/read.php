<?php


function readActo($Id_acto) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Actos WHERE Id_acto='$Id_acto'");

    return $mensaje;
}

function readActos() {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Actos");

    return $mensaje;
}

function obtenerTitulo($currentDate,$horaMostrar) {
 
    $mensaje = connection::ejecutar_consulta("SELECT Titulo FROM eventos.Actos WHERE Fecha='$currentDate' AND Hora= '$horaMostrar'");

    return $mensaje;
}