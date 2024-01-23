<?php


function deleteTipoActo($Id_tipo_acto) {
 
    $consulta = "DELETE FROM eventos.Tipo_acto WHERE Id_tipo_acto = '$Id_tipo_acto'";

    connection::ejecutar_consulta($consulta);

}