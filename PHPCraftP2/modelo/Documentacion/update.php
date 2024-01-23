<?php


function updateDocumentacion($Id_presentacion, $Id_acto, $Localizacion_documentacion, $Orden, $Id_persona,$Titulo_documento) {

    //Se actualiza segun el ID proporcionado.
    $consulta = "UPDATE eventos.Documentacion SET Id_acto='$Id_acto', Localizacion_documentacion='$Localizacion_documentacion', Orden='$Orden', 
    Id_persona='$Id_persona', Titulo_documento='$Titulo_documento'  WHERE Id_presentacion='$Id_presentacion'";

    connection::ejecutar_consulta($consulta);
}