<?php

function createTipoUsuario($Id_tipo_usuario, $Descripcion) {
    
    $consulta = "INSERT INTO eventos.Tipos_usuarios (Id_tipo_usuario, Descripcion) VALUES ('$Id_tipo_usuario', '$Descripcion')";

    connection::ejecutar_consulta($consulta);
    
}