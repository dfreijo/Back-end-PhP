<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">PAGINA DE CONTROL DEL MODELO DE DATOS</h1>
    </br>
    <h2>Tabla Personas</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id- <input  name="id">
        Nombre- <input  name="nombre">
        Apellido1- <input  name="apellido1">
        Apellido2- <input  name="apellido2">
        <button type="submit" name="createPersona">Crear Persona</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id- <input  name="id">
        Nombre- <input  name="nombre">
        Apellido1- <input  name="apellido1">
        Apellido2- <input  name="apellido2">
        <button type="submit" name="updatePersona">Actualizar Persona por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Nombre- <input  name="nombre">
        <button type="submit" name="readPersona">Leer Persona por Nombre</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id- <input  name="id">
        <button type="submit" name="deletePersona">Borrar Persona por Nombre</button>
    </form>
    </br>
    <h2>Tabla Actos</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_acto- <input  name="Id_acto">
        Fecha- <input  name="Fecha">
        Hora- <input  name="Hora">
        Titulo- <input  name="Titulo">
        </br></br> 
        Descripcion_corta- <input  name="Descripcion_corta">
        Descripcion_larga- <input  name="Descripcion_larga">
        Num_asistentes- <input  name="Num_asistentes">
        Id_tipo_acto- <input  name="Id_tipo_acto">
        <button type="submit" name="createActo">Crear Acto</button>
        </br></br>
        La fecha lleva formato DD-MM-YY y el Id_tipo_acto debe existir en la tabla tipo_acto
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_acto- <input  name="Id_acto">
        Fecha- <input  name="Fecha">
        Hora- <input  name="Hora">
        Titulo- <input  name="Titulo">
        </br></br> 
        Descripcion_corta- <input  name="Descripcion_corta">
        Descripcion_larga- <input  name="Descripcion_larga">
        Num_asistentes- <input  name="Num_asistentes">
        Id_tipo_acto- <input  name="Id_tipo_acto">
        <button type="submit" name="updateActo">Actualizar Acto por id</button>
        </br></br>
        La fecha lleva formato DD-MM-YY y el Id_tipo_acto debe existir en la tabla tipo_acto
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_acto- <input  name="Id_acto">
        <button type="submit" name="readActo">Leer Acto por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_acto- <input  name="Id_acto">
        <button type="submit" name="deleteActo">Borrar Acto por id</button>
    </form>
    </br>
    </br>
    <h2>Tabla Documentacion</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_presentacion- <input  name="Id_presentacion">
        Id_acto- <input  name="Id_acto">
        Localizacion_documentacion- <input  name="Localizacion_documentacion">
        Orden- <input  name="Orden">
        Id_persona- <input  name="Id_persona">
        Titulo_documento- <input  name="Titulo_documento">
        <button type="submit" name="createDocumentacion">Crear Documentacion</button>
        </br>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_presentacion- <input  name="Id_presentacion">
        Id_acto- <input  name="Id_acto">
        Localizacion_documentacion- <input  name="Localizacion_documentacion">
        Orden- <input  name="Orden">
        Id_persona- <input  name="Id_persona">
        Titulo_documento- <input  name="Titulo_documento">
        <button type="submit" name="updateDocumentacion">Actualizar Documentacion por Id</button>
        </br>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_presentacion- <input  name="Id_presentacion">
        <button type="submit" name="readDocumentacion">Leer Documentacion por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_presentacion- <input  name="Id_presentacion">
        <button type="submit" name="deleteDocumentacion">Borrar Documentacion por id</button>
    </form>
    </br>
    </br>
    <h2>Tabla Inscritos</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_inscripcion- <input  name="Id_inscripcion">
        Id_persona- <input  name="Id_persona">
        id_acto- <input  name="id_acto">
        Fecha_inscripcion- <input  name="Fecha_inscripcion">
        <button type="submit" name="createInscritos">Crear Inscripcion</button>
        </br>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_inscripcion- <input  name="Id_inscripcion">
        Id_persona- <input  name="Id_persona">
        id_acto- <input  name="id_acto">
        Fecha_inscripcion- <input  name="Fecha_inscripcion">
        <button type="submit" name="updateInscritos">Actualizar Inscripcion por Id</button>
        </br>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_inscripcion- <input  name="Id_inscripcion">
        <button type="submit" name="readInscritos">Leer Inscripcion por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_inscripcion- <input  name="Id_inscripcion">
        <button type="submit" name="deleteInscripcion">Borrar Inscripcion por id</button>
    </form>
    </br>
    </br>
    <h2>Tabla Lista_Ponentes</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        id_ponente- <input  name="id_ponente">
        Id_persona- <input  name="Id_persona">
        Id_acto- <input  name="Id_acto">
        Orden- <input  name="Orden">
        <button type="submit" name="createListaPonentes">Crear Ponente</button>
        </br>
    </form>  
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        id_ponente- <input  name="id_ponente">
        Id_persona- <input  name="Id_persona">
        Id_acto- <input  name="Id_acto">
        Orden- <input  name="Orden">
        <button type="submit" name="updateListaPonentes">Actualizar Ponente por ID</button>
        </br>
    </form> 
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        id_ponente- <input  name="id_ponente">
        <button type="submit" name="readListaPonentes">Leer Ponente por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        id_ponente- <input  name="id_ponente">
        <button type="submit" name="deleteListaPonentes">Borrar Ponente por id</button>
    </form>
    </br>
    </br>
    <h2>Tabla Tipos_usuarios</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_tipo_usuario- <input  name="Id_tipo_usuario">
        Descripcion- <input  name="Descripcion">
        <button type="submit" name="createTipoUsuario">Crear un Tipo de Usuario</button>
        </br>
    </form>  
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_tipo_usuario- <input  name="Id_tipo_usuario">
        Descripcion- <input  name="Descripcion">
        <button type="submit" name="updateTipoUsuario">Actualizar Tipo de Usuario por ID</button>
        </br>
    </form> 
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_tipo_usuario- <input  name="Id_tipo_usuario">
        <button type="submit" name="readTipoUsuario">Leer Tipo de usuario por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_tipo_usuario- <input  name="Id_tipo_usuario">
        <button type="submit" name="deleteTipoUsuario">Borrar Tipo de usuario por id</button>
    </form>
    </br>
    </br>
    <h2>Tabla  Tipo_acto</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_tipo_acto- <input  name="Id_tipo_acto">
        Descripcion- <input  name="Descripcion">
        <button type="submit" name="createTipoActo">Crear un Tipo de Acto</button>
        </br>
    </form> 
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_tipo_acto- <input  name="Id_tipo_acto">
        Descripcion- <input  name="Descripcion">
        <button type="submit" name="updateTipoActo">Actualizar Tipo de Acto por ID</button>
        </br>
    </form> 
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
         Id_tipo_acto- <input  name="Id_tipo_acto">
        <button type="submit" name="readTipoActo">Leer Tipo de acto por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_tipo_acto- <input  name="Id_tipo_acto">
        <button type="submit" name="deleteTipoActo">Borrar Tipo de acto por id</button>
    </form>
    </br>
    </br>
    <h2>Tabla  Usuarios</h2><!-- -------------------------------------------------------------------------- -->
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_usuario- <input  name="Id_usuario">
        Username- <input  name="Username">
        Password- <input  name="Password">
        Id_Persona- <input  name="Id_Persona">
        Id_tipo_usuario- <input  name="Id_tipo_usuario">
        <button type="submit" name="createUsuario">Crear Usuario</button>
        </br>
    </form> 
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_usuario- <input  name="Id_usuario">
        Username- <input  name="Username">
        Password- <input  name="Password">
        Id_Persona- <input  name="Id_Persona">
        Id_tipo_usuario- <input  name="Id_tipo_usuario">
        <button type="submit" name="updateUsuario">Actualizar Usuario por ID</button>
        </br>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
        Id_usuario- <input  name="Id_usuario">
        <button type="submit" name="readUsuario">Leer Usuario por id</button>
    </form>
    </br>
    <form style="border: 2px solid black;padding: 11px;" action="./controladorMain.php" method="post">
    Id_usuario- <input  name="Id_usuario">
        <button type="submit" name="deleteUsuario">Borrar Usuario por id</button>
    </form>
    </br>
    </br>
</html>

<?php

include('../modelo/connection.php');
include('../modelo/Personas/create.php');
include('../modelo/Personas/update.php');
include('../modelo/Personas/read.php');
include('../modelo/Personas/delete.php');
include('../modelo/Actos/create.php');
include('../modelo/Actos/update.php');
include('../modelo/Actos/read.php');
include('../modelo/Actos/delete.php');
include('../modelo/Documentacion/create.php');
include('../modelo/Documentacion/update.php');
include('../modelo/Documentacion/read.php');
include('../modelo/Documentacion/delete.php');
include('../modelo/Inscritos/create.php');
include('../modelo/Inscritos/update.php');
include('../modelo/Inscritos/read.php');
include('../modelo/Inscritos/delete.php');
include('../modelo/Lista_Ponentes/create.php');
include('../modelo/Lista_Ponentes/update.php');
include('../modelo/Lista_Ponentes/read.php');
include('../modelo/Tipos_usuarios/create.php');
include('../modelo/Tipos_usuarios/update.php');
include('../modelo/Tipos_usuarios/read.php');
include('../modelo/Tipos_usuarios/delete.php');
include('../modelo/Tipo_acto/create.php');
include('../modelo/Tipo_acto/update.php');
include('../modelo/Tipo_acto/read.php');
include('../modelo/Tipo_acto/delete.php');
include('../modelo/Usuarios/create.php');
include('../modelo/Usuarios/update.php');
include('../modelo/Usuarios/read.php');
include('../modelo/Usuarios/delete.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
/*-----------------------------------------------------------------------------------------------*/
    if (isset($_POST["createPersona"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        createPersonas($id, $nombre, $apellido1, $apellido2);
    }elseif(isset($_POST["updatePersona"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        updatePersonas($id, $nombre, $apellido1, $apellido2);
    }elseif(isset($_POST["readPersona"])){
        $nombre = $_POST["nombre"];
        $mensaje = readPersonaNombre($nombre);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Nombre: " . $fila['Nombre'] . " ";
                echo "Apellido 1: " . $fila['Apellido1'] . " ";
                echo "Apellido 2: " . $fila['Apellido2'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }elseif(isset($_POST["deletePersona"])){
        $id = $_POST["id"];
        deletePersona($id);
/*-----------------------------------------------------------------------------------------------*/
    }elseif(isset($_POST["createActo"])){
        $Id_acto = $_POST["Id_acto"];
        $Fecha = $_POST["Fecha"];
        $Hora = $_POST["Hora"];
        $Titulo = $_POST["Titulo"];
        $Descripcion_corta = $_POST["Descripcion_corta"];
        $Descripcion_larga = $_POST["Descripcion_larga"];
        $Num_asistentes = $_POST["Num_asistentes"];
        $Id_tipo_acto = $_POST["Id_tipo_acto"];
        createActo($Id_acto,$Fecha,$Hora,$Titulo,$Descripcion_corta,$Descripcion_larga,$Num_asistentes,$Id_tipo_acto);
    }elseif(isset($_POST["updateActo"])){
        $Id_acto = $_POST["Id_acto"];
        $Fecha = $_POST["Fecha"];
        $Hora = $_POST["Hora"];
        $Titulo = $_POST["Titulo"];
        $Descripcion_corta = $_POST["Descripcion_corta"];
        $Descripcion_larga = $_POST["Descripcion_larga"];
        $Num_asistentes = $_POST["Num_asistentes"];
        $Id_tipo_acto = $_POST["Id_tipo_acto"];
        updateActo($Id_acto,$Fecha,$Hora,$Titulo,$Descripcion_corta,$Descripcion_larga,$Num_asistentes,$Id_tipo_acto);
    }elseif(isset($_POST["readActo"])){
        $Id_acto = $_POST["Id_acto"];
        $mensaje = readActo($Id_acto);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Titulo: " . $fila['Titulo'] . " ";
                echo "Fecha: " . $fila['Fecha'] . " ";
                echo "Hora: " . $fila['Hora'] . " ";
                echo "Descripcion_corta: " . $fila['Descripcion_corta'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }elseif(isset($_POST["deleteActo"])){
        $Id_acto = $_POST["Id_acto"];
        deleteActo($Id_acto);
/*-----------------------------------------------------------------------------------------------*/
    }elseif (isset($_POST["createDocumentacion"])) {
        $Id_presentacion = $_POST["Id_presentacion"];
        $Id_acto = $_POST["Id_acto"];
        $Localizacion_documentacion = $_POST["Localizacion_documentacion"];
        $Orden = $_POST["Orden"];
        $Id_persona = $_POST["Id_persona"];
        $Titulo_documento = $_POST["Titulo_documento"];
        createDocumentacion($Id_presentacion, $Id_acto, $Localizacion_documentacion, $Orden, $Id_persona,$Titulo_documento);
    }elseif (isset($_POST["updateDocumentacion"])) {
        $Id_presentacion = $_POST["Id_presentacion"];
        $Id_acto = $_POST["Id_acto"];
        $Localizacion_documentacion = $_POST["Localizacion_documentacion"];
        $Orden = $_POST["Orden"];
        $Id_persona = $_POST["Id_persona"];
        $Titulo_documento = $_POST["Titulo_documento"];
        updateDocumentacion($Id_presentacion, $Id_acto, $Localizacion_documentacion, $Orden, $Id_persona,$Titulo_documento);
    }elseif(isset($_POST["readDocumentacion"])){
        $Id_presentacion = $_POST["Id_presentacion"];
        $mensaje = readDocumentacon($Id_presentacion);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Localizacion_documentacion: " . $fila['Localizacion_documentacion'] . " ";
                echo "Orden: " . $fila['Orden'] . " ";
                echo "Id_persona: " . $fila['Id_persona'] . " ";
                echo "Titulo_documento: " . $fila['Titulo_documento'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }elseif(isset($_POST["deleteDocumentacion"])){
        $Id_presentacion = $_POST["Id_presentacion"];
        deleteDocumentacion($Id_presentacion);
/*-----------------------------------------------------------------------------------------------*/
    }elseif (isset($_POST["createInscritos"])) {
        $Id_inscripcion = $_POST["Id_inscripcion"];
        $Id_persona = $_POST["Id_persona"];
        $id_acto = $_POST["id_acto"];
        $Fecha_inscripcion = $_POST["Fecha_inscripcion"];
        createInscripcion($Id_inscripcion, $Id_persona, $id_acto, $Fecha_inscripcion);
    }elseif (isset($_POST["updateInscritos"])) {
        $Id_inscripcion = $_POST["Id_inscripcion"];
        $Id_persona = $_POST["Id_persona"];
        $id_acto = $_POST["id_acto"];
        $Fecha_inscripcion = $_POST["Fecha_inscripcion"];
        updateInscripcion($Id_inscripcion, $Id_persona, $id_acto, $Fecha_inscripcion);
    }elseif(isset($_POST["readInscritos"])){
        $Id_inscripcion = $_POST["Id_inscripcion"];
        $mensaje = readInscripcion($Id_inscripcion);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Id_persona: " . $fila['Id_persona'] . " ";
                echo "id_acto: " . $fila['id_acto'] . " ";
                echo "Fecha_inscripcion: " . $fila['Fecha_inscripcion'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }
    elseif(isset($_POST["deleteInscripcion"])){
        $Id_inscripcion = $_POST["Id_inscripcion"];
        deleteInscripcion($Id_inscripcion);
/*-----------------------------------------------------------------------------------------------*/
    }elseif (isset($_POST["createListaPonentes"])) {
        $id_ponente = $_POST["id_ponente"];
        $Id_persona = $_POST["Id_persona"];
        $Id_acto = $_POST["Id_acto"];
        $Orden = $_POST["Orden"];
        createPonente($id_ponente, $Id_persona, $Id_acto, $Orden);
    }
    elseif (isset($_POST["updateListaPonentes"])) {
        $id_ponente = $_POST["id_ponente"];
        $Id_persona = $_POST["Id_persona"];
        $Id_acto = $_POST["Id_acto"];
        $Orden = $_POST["Orden"];
        updatePonente($id_ponente, $Id_persona, $Id_acto, $Orden);
    }elseif(isset($_POST["readListaPonentes"])){
        $id_ponente = $_POST["id_ponente"];
        $mensaje = readPonente($id_ponente);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Id_persona: " . $fila['Id_persona'] . " ";
                echo "Id_acto: " . $fila['Id_acto'] . " ";
                echo "Orden: " . $fila['Orden'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }elseif(isset($_POST["deleteListaPonentes"])){
        $id_ponente = $_POST["id_ponente"];
        deletePonente($id_ponente);
/*-----------------------------------------------------------------------------------------------*/
    }elseif (isset($_POST["createTipoUsuario"])) {
        $Id_tipo_usuario = $_POST["Id_tipo_usuario"];
        $Descripcion = $_POST["Descripcion"];
        createTipoUsuario($Id_tipo_usuario, $Descripcion);
    } elseif (isset($_POST["updateTipoUsuario"])) {
        $Id_tipo_usuario = $_POST["Id_tipo_usuario"];
        $Descripcion = $_POST["Descripcion"];
        updateTipoUsuario($Id_tipo_usuario, $Descripcion);
    }elseif(isset($_POST["readTipoUsuario"])){
        $Id_tipo_usuario = $_POST["Id_tipo_usuario"];
        $mensaje = readTipoUsuario($Id_tipo_usuario);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Id_tipo_usuario: " . $fila['Id_tipo_usuario'] . " ";
                echo "Descripcion: " . $fila['Descripcion'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }elseif(isset($_POST["deleteTipoUsuario"])){
        $Id_tipo_usuario = $_POST["Id_tipo_usuario"];
        deleteTipoUsuarios($Id_tipo_usuario);
/*-----------------------------------------------------------------------------------------------*/
    }elseif (isset($_POST["createTipoActo"])) {
        $Id_tipo_acto = $_POST["Id_tipo_acto"];
        $Descripcion = $_POST["Descripcion"];
        createTipoActo($Id_tipo_acto, $Descripcion);
    } elseif (isset($_POST["updateTipoActo"])) {
        $Id_tipo_acto = $_POST["Id_tipo_acto"];
        $Descripcion = $_POST["Descripcion"];
        updateTipoActo($Id_tipo_acto, $Descripcion);
    }elseif(isset($_POST["readTipoActo"])){
        $Id_tipo_acto = $_POST["Id_tipo_acto"];
        $mensaje = readTipoActo($Id_tipo_acto);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Id_tipo_acto: " . $fila['Id_tipo_acto'] . " ";
                echo "Descripcion: " . $fila['Descripcion'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }elseif(isset($_POST["deleteTipoActo"])){
        $Id_tipo_acto = $_POST["Id_tipo_acto"];
        deleteTipoActo($Id_tipo_acto);
/*-----------------------------------------------------------------------------------------------*/
    }elseif (isset($_POST["createUsuario"])) {
        $Id_usuario  = $_POST["Id_usuario"];
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Id_Persona  = $_POST["Id_Persona"];
        $Id_tipo_usuario  = $_POST["Id_tipo_usuario"];
        createUsuario($Id_usuario, $Username,$Password,$Id_Persona,$Id_tipo_usuario);
    } elseif (isset($_POST["updateUsuario"])) {
        $Id_usuario  = $_POST["Id_usuario"];
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Id_Persona  = $_POST["Id_Persona"];
        $Id_tipo_usuario  = $_POST["Id_tipo_usuario"];
        updateUsuario($Id_usuario, $Username,$Password,$Id_Persona,$Id_tipo_usuario);
    }elseif(isset($_POST["readUsuario"])){
        $Id_usuario = $_POST["Id_usuario"];
        $mensaje = readUsuario($Id_usuario);
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "</br>";
                echo "Username: " . $fila['Username'] . " ";
                echo "Password: " . $fila['Password'] . " ";
                echo "Id_Persona: " . $fila['Id_Persona'] . " ";
                echo "Id_tipo_usuario: " . $fila['Id_tipo_usuario'] . " ";
            }
        } else {
            echo "Error en la consulta";
        }
    }elseif(isset($_POST["deleteUsuario"])){
        $Id_usuario = $_POST["Id_usuario"];
        deleteUsuario($Id_usuario);
/*-----------------------------------------------------------------------------------------------*/
    }
}
?>




