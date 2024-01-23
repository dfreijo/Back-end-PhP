<?php

function createUsuario($Username,$Password,$Id_Persona,$Id_tipo_usuario,$Email) {
    
   try{ 
        $consulta = "INSERT INTO eventos.Usuarios (Username,Password,Id_Persona,Id_tipo_usuario,Email) 
        VALUES ('$Username', '$Password', '$Id_Persona', '$Id_tipo_usuario', '$Email')";

        $resultado = connection::ejecutar_consulta($consulta);
    }catch (PDOException $e) {
        return 'Error en el registro!';
    }
}