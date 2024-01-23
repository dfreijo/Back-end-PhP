<?php


function updateTipoUsuario($Id_tipo_usuario, $Descripcion) {

    //Se actualiza segun el ID proporcionado.
    $consulta = "UPDATE eventos.Tipos_usuarios SET Descripcion='$Descripcion' WHERE Id_tipo_usuario='$Id_tipo_usuario'";

    connection::ejecutar_consulta($consulta);
}
