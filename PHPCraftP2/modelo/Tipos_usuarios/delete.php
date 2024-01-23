<?php


function deleteTipoUsuarios($Id_tipo_usuario) {
 
    $consulta = "DELETE FROM eventos.Tipos_usuarios WHERE Id_tipo_usuario = '$Id_tipo_usuario'";

    connection::ejecutar_consulta($consulta);

}