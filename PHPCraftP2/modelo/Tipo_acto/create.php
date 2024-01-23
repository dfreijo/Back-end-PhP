<?php

function createTipoActo($Descripcion) {
    try {
        $consulta = "INSERT INTO eventos.Tipo_acto (Descripcion) 
        VALUES ('$Descripcion')";

        $resultado = connection::ejecutar_consulta($consulta);
    }catch (PDOException $e) {
        return 'Error agregando el tipo de acto!';
    } 
}