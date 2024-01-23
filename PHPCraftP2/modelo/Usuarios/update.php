<?php


function updateUsuario($Id_usuario, $Username,$Password,$Id_Persona,$Id_tipo_usuario,$Email) {

    $consulta = "UPDATE eventos.Usuarios SET Username='$Username', Password='$Password', Id_Persona='$Id_Persona', Id_tipo_usuario='$Id_tipo_usuario', Email='$Email'
    WHERE Id_usuario='$Id_usuario'";

    connection::ejecutar_consulta($consulta);
}

function updatePerfilUsuario($Id_usuario, $Username, $Password, $Email) {

    $consulta = "UPDATE eventos.Usuarios SET Username='$Username', Password='$Password' , Email='$Email'
    WHERE Id_usuario='$Id_usuario'";

    connection::ejecutar_consulta($consulta);
}