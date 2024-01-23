<?php

include('../../modelo/connection.php');
include('../../modelo/Actos/read.php');
include('../../modelo/Actos/update.php');
include('../../modelo/Inscritos/create.php');
include('../../modelo/Inscritos/read.php');
include('../../modelo/Inscritos/delete.php');


function obtenerActos() {
    $resultados = readActos();
    return $resultados;
}

function inscribirseEnActo($id_acto,$id_persona,$fecha) {
    $resultados = createInscripcionUsuario($id_acto,$id_persona,$fecha);
    return $resultados;
}

function leerActosDePersona($id_persona) {
    $resultados = readInscripcionPorPersona($id_persona);
    return $resultados;
}

function desinscribirPersonaActo($id_acto,$id_persona){
    deleteInscripcionUsuario($id_acto,$id_persona);
}

function obtenerTituloPorDia($currentDate,$horaMostrar) {
    $resultados = obtenerTitulo($currentDate,$horaMostrar);
    return $resultados;
}

