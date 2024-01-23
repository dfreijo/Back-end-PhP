<?php

function createDocumentacion($Id_presentacion, $Id_acto, $Localizacion_documentacion, $Orden, $Id_persona,$Titulo_documento) {
    
    $consulta = "INSERT INTO eventos.Documentacion (Id_presentacion,Id_acto, Localizacion_documentacion, Orden, Id_persona,Titulo_documento) 
    VALUES ('$Id_presentacion', '$Id_acto', '$Localizacion_documentacion', '$Orden', '$Id_persona','$Titulo_documento')";

    connection::ejecutar_consulta($consulta);
    
}