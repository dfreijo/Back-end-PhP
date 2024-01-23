<?php


function readTipoUsuario($Id_tipo_usuario) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Tipos_usuarios WHERE Id_tipo_usuario='$Id_tipo_usuario'");

    return $mensaje;
}
