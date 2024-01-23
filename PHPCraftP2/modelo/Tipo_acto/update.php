<?php


function updateTipoActo($Id_tipo_acto, $Descripcion) {

    //Se actualiza segun el ID proporcionado.
    $consulta = "UPDATE eventos.Tipo_acto SET Descripcion='$Descripcion' WHERE Id_tipo_acto='$Id_tipo_acto'";

    $resultado = connection::ejecutar_consulta($consulta);
}
