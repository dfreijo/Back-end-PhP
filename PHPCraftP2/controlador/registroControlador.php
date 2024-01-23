<!-- registroControlador -->
<?php

include('../modelo/Usuarios/create.php');
include('../modelo/Personas/create.php');
include('../modelo/Personas/read.php');
include('../modelo/connection.php');

function registro() {
    
    if (isset($_POST["createPerson"])) {
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];

        $resultado_creacion = createPersonas($nombre, $apellido1, $apellido2);

        if ($resultado_creacion !== 'Error en el registro!') {
            $resultado_persona = readPersona($nombre, $apellido1, $apellido2);

            if ($resultado_persona) {
                while ($fila = $resultado_persona->fetch(PDO::FETCH_ASSOC)) {
                    $id_persona = $fila['Id_persona']; 

                    $Username = $_POST["Username"];
                    $Password = $_POST["Password"];
                    $Id_tipo_usuario = $_POST["Id_tipo_usuario"];
                    $Email = $_POST["Email"];

                    $registroExitoso = createUsuario($Username, $Password, $id_persona, $Id_tipo_usuario, $Email); 
                } 
            }
        } else{
            return 'Error en el registro!';
        }
    } 
}

?>