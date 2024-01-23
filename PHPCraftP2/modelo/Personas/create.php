<?php

function createPersonas($nombre, $apellido1, $apellido2) {

    try{
        $consulta = "INSERT INTO eventos.Personas (nombre, apellido1, apellido2) 
        VALUES ('$nombre', '$apellido1', '$apellido2')";
    
        $resultado = connection::ejecutar_consulta($consulta);
        
    }catch (PDOException $e) {
        return 'Error en el registro!';
    }
}