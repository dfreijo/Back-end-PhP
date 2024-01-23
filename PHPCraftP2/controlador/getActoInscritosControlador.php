<?php

include('../../modelo/connection.php');
include('../../modelo/Actos/read.php');
include('../../modelo/Usuarios/read.php');
include('../../modelo/Inscritos/read.php');
include('../../modelo/Inscritos/delete.php');
include('../../modelo/Inscritos/create.php');
include('../../modelo/Personas/read.php');

/* FUNCIONES PARA EDITAR EVENTO */
function listarActosInscritos() {

    $resultados = readActos();

    if ($resultados) {
        foreach ($resultados as $acto) {
            $Id_acto = $acto['Id_acto'];
            $Titulo = $acto['Titulo'];
            $Descripcion_corta = $acto['Descripcion_corta'];
            $Descripcion_larga = $acto['Descripcion_larga'];
            $Fecha = $acto['Fecha'];
            $Hora = $acto['Hora'];
            $Id_tipo_acto = $acto['Id_tipo_acto'];
            $Num_asistentes = $acto['Num_asistentes'];
            
            echo '<div class="acto">';
            echo '  <span>ID: ' . $Id_acto . ', Titulo: ' . $Titulo .  '</span>';
            echo '  <span>Descripcion: ' . $Descripcion_corta .  '</span>';
            echo '  <a href="inscritosActo.php?id_acto=' . $Id_acto . '&titulo=' . $Titulo . '" class="btn btn-editar-acto">Inscritos</a>';

            echo '</div></br>'; 
        }
    }
}

function listarInscritosIdAct($id_acto){
    $resultado = listarInscritosIdActo($id_acto);
    return $resultado;
}

function getPersonaPorId($id_persona){
    $resultado = readPersonaId($id_persona);
    return $resultado;
}

function deleteInscrito($id_acto,$id_persona){
    deleteInscripcionUsuario($id_acto,$id_persona);
}

function getAllPersonas(){
    $resultado = readAllPersonas();
    return $resultado;
}

function crearInscripcion($Id_persona, $id_acto){
    InscripcionPersona($Id_persona, $id_acto);
}

function readIActoPersona($id_acto,$id_persona_inscribir){
    $mensaje = readIActoPersonaModelo($id_acto,$id_persona_inscribir);
    return $mensaje;
}