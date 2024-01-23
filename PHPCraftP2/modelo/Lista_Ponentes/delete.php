<?php


function deletePonente($id_ponente) {
    echo 'ID ponente: ' . $id_ponente ."";
    $consulta = "DELETE FROM eventos.Lista_Ponentes WHERE id_ponente = '$id_ponente'";

    connection::ejecutar_consulta($consulta);

}
