<?php

function readUsuario($Id_usuario) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Usuarios WHERE Id_usuario='$Id_usuario'");

    return $mensaje;
}

function readUsuarios() {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Usuarios");

    return $mensaje;
}

function existeUsuario($usuario, $contrasena) {
 
    try {
        $consulta = "SELECT * FROM eventos.Usuarios WHERE Username='$usuario' AND Password='$contrasena'";
        $resultado = connection::ejecutar_consulta($consulta);
        return $resultado; 
    } catch (PDOException $e) {
        return null; 
    }
}
