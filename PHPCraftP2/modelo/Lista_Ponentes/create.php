<?php

function createPonente($Id_persona, $Id_acto, $Orden) {
    
    try {
        $consulta = "INSERT INTO eventos.Lista_Ponentes (Id_persona, Id_acto, Orden) 
        VALUES ('$Id_persona', '$Id_acto', '$Orden')";
        var_dump($Id_persona, $Id_acto, $Orden);

        $resultado = connection::ejecutar_consulta($consulta);
    }catch(PDOException $e) {
        return 'Error al añadir ponente!';
    }
}