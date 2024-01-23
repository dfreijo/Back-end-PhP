<?php


function deleteDocumentacion($Id_presentacion) {
 
    $consulta = "DELETE FROM eventos.Documentacion WHERE Id_presentacion = '$Id_presentacion'";

    connection::ejecutar_consulta($consulta);

}