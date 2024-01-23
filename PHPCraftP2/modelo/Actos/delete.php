<?php


function deleteActo($Id_acto) {
 
    $consulta = "DELETE FROM eventos.Actos WHERE Id_acto = '$Id_acto'";

    connection::ejecutar_consulta($consulta);

}
