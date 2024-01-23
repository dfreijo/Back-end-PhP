<?php


function deleteUsuario($Id_usuario) {
 
    $consulta = "DELETE FROM eventos.Usuarios WHERE Id_usuario = '$Id_usuario'";

    connection::ejecutar_consulta($consulta);

}