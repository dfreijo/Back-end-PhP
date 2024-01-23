<!-- geActoControlador -->
<?php

include('../../modelo/connection.php');
include('../../modelo/Actos/read.php');
include('../../modelo/Actos/update.php');
include('../../modelo/Lista_Ponentes/read.php');
include('../../modelo/Lista_Ponentes/create.php');
include('../../modelo/Lista_Ponentes/update.php');
include('../../modelo/Lista_Ponentes/delete.php');
include('../../modelo/Tipo_acto/read.php');
include('../../modelo/Tipo_acto/create.php');
include('../../modelo/Tipo_acto/update.php');
include('../../modelo/Tipo_acto/delete.php');
include('../../modelo/Usuarios/read.php');

function editarActo(){
    echo '<meta http-equiv="refresh" content="0;url=edit_evento.php">';
    exit();
}

function confiPonente(){
    echo '<meta http-equiv="refresh" content="0;url=ponente.php">';
    exit();
}

function editarTipoEvento(){
    echo '<meta http-equiv="refresh" content="0;url=tipo_evento.php">';
    exit();
}

function adminInscritos(){
    echo '<meta http-equiv="refresh" content="0;url=inscritos.php">';
    exit();
}

/***********************************************************************************************************/
/* FUNCIONES PARA EDITAR EVENTO */
function listarActos() {

    $resultados = readActos();

    if ($resultados) {
        foreach ($resultados as $acto) {
            $Id_acto = $acto['Id_acto'];
            $Titulo = $acto['Titulo'];
            $Descripcion_corta = $acto['Descripcion_corta'];
            $Descripcion_larga = $acto['Descripcion_larga'];
            $Fecha = $acto['Fecha'];
            $Hora = $acto['Hora'];
            $Id_tipo_acto = $acto['Id_tipo_acto'];
            $Num_asistentes = $acto['Num_asistentes'];
            
            echo '<div class="acto">';
            echo '  <span>ID: ' . $acto['Id_acto'] . ', Titulo: ' . $acto['Titulo'] .  '</span>';
            echo '  <button class="btn btn-editar-acto" data-id="' . $acto['Id_acto'] . '">Editar</button>';  
            echo '  <form method="POST" class="formulario-editar-acto border p-3" style="display:none;">';
            echo '      <input type="hidden" name="id_acto" value="' . $acto['Id_acto'] . '">';
            echo '      <div class="form-group">';
            echo '          <label for="titulo">Título</label>';
            echo '          <input type="text" name="titulo" id="titulo" class="form-control" required value="' . $Titulo . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="descripcion_corta">Resumen</label>';
            echo '          <input type="text" name="descripcion_corta" id="descripcion_corta" class="form-control" required value="' . $Descripcion_corta . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="descripcion_larga">Descripción</label>';
            echo '          <textarea name="descripcion_larga" id="descripcion_larga" class="form-control" rows="3" required>' . $Descripcion_larga . '</textarea>';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="fecha">Fecha</label>';
            echo '          <input type="date" name="fecha" id="fecha" class="form-control" required value="' . $Fecha . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="hora">Hora</label>';
            echo '          <input type="time" name="hora" id="hora" class="form-control"required value="' . $Hora . '">';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="id_tipo_acto">Tipo de Acto</label>';
            echo '          <select name="id_tipo_acto" id="id_tipo_acto" class="form-control" required value="' . $Id_tipo_acto . '">';
            echo '              <option value="1">Conferencia</option>';
            echo '              <option value="2">Evento cinematográfico</option>';
            echo '              <option value="3">Evento cultural</option>';
            echo '              <option value="4">Evento deportivo</option>';
            echo '              <option value="5">Evento gastronómico</option>';
            echo '              <option value="6">Evento musical</option>';
            echo '              <option value="7">Seminario</option>     ';  
            echo '          </select>';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="num_asistentes">Número de Asistentes</label>';
            echo '          <input type="number" name="num_asistentes" id="num_asistentes" class="form-control" required value="' . $Num_asistentes . '">';
            echo '      </div>';
            echo '      <button type="submit" name="editarActo" class="btn btn-primary btn-block">Aplicar</button>';
            echo '  </form>';
            echo '</div>';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editarActo'])) {
                // Obtén los valores del formulario
                $Id_acto = $_POST['id_acto'];
                $Fecha = $_POST['fecha'];
                $Hora = $_POST['hora'];
                $Titulo = $_POST['titulo'];
                $Descripcion_corta = $_POST['descripcion_corta'];
                $Descripcion_larga = $_POST['descripcion_larga'];
                $Num_asistentes = $_POST['num_asistentes'];
                $Id_tipo_acto = $_POST['id_tipo_acto'];
            
                // Llama a la función para actualizar el acto
                updateActo($Id_acto, $Fecha, $Hora, $Titulo, $Descripcion_corta, $Descripcion_larga, $Num_asistentes, $Id_tipo_acto);
                echo '<meta http-equiv="refresh" content="0;url=./edit_evento.php">';
            }
        }
    } else {
        echo "No hay actos disponibles.";
    }
}

/***********************************************************************************************************/
/* FUNCIONES PARA GESTION PONENTES */
function listarPonentes() {
    $resultados = readPonentes();

    if ($resultados) {
        foreach ($resultados as $ponente) {
            $Id_ponente = $ponente['id_ponente'];
            $Id_acto = $ponente['Id_acto'];
            $Id_persona = $ponente['Id_persona'];
            $Orden = $ponente['Orden'];
            echo '<div class="ponente">';
            echo '  <span>ID: ' . $ponente['id_ponente'] . ', ID personal: ' . $ponente['Id_persona'] . ', ID evento inscrito: ' . $ponente['Id_acto'] . ', Orden: ' . $ponente['Orden'] .  '</span>';
            echo '  <button class="btn btn-editar-acto " data-id="' . $ponente['id_ponente'] . '">Editar</button>';  
            echo '  <form method="POST" class="formulario-editar-ponente border p-3" style="display:none;">';
            echo '  <input type="hidden" name="id_ponente" value="' . $Id_ponente . '">';
            echo '      <div class="form-group">';
            echo '          <label for="id_persona">ID personal</label>';
            echo '          <select name="id_persona" class="form-control" required>';
                            listarPersona($Id_persona); 
            echo '          </select>';
            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="id_acto">ID evento</label>';
            echo '          <select name="id_acto" class="form-control" required>';
                            listarActo($Id_acto); 
            echo '          </select>';            echo '      </div>';
            echo '      <div class="form-group">';
            echo '          <label for="Orden">Orden de aparición</label>';
            echo '          <input type="number" name="orden" id="orden" class="form-control" required value="' . $Orden . '">';
            echo '      </div>';
            echo '      <div class="button-container">';
            echo '      <button type="submit" name="guardar_cambios" class="btn btn-primary">Aplicar</button>';
            echo '      <button type="submit" name="eliminar_ponente" class="btn btn-danger eliminar">Eliminar</button>';
            echo '      </div>';
            echo '  </form>';
            echo '</div>';
            

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar_cambios'])) {
                // Obtén los valores del formulario
                $Id_ponente = $_POST['id_ponente'];
                $Id_acto = $_POST['id_acto'];
                $Id_persona = $_POST['id_persona'];
                $Orden = $_POST['orden'];
     
                updatePonente($Id_ponente, $Id_persona, $Id_acto,  $Orden);
                echo '<meta http-equiv="refresh" content="0;url=./ponente.php">';

            }
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar_ponente'])) {
                // Obtén los valores del formulario
                $Id_ponente = $_POST['id_ponente'];
                
                deletePonente($Id_ponente);
                echo '<meta http-equiv="refresh" content="0;url=./ponente.php">';
            }
        }
    }else{
        echo "<p>No hay ponentes en la lista.</p>";
    }
}

function añadirPonentes() {
    if (isset($_POST["añadirPonente"])) {
        $Id_pesona = $_POST["id_persona"];
        $Id_acto = $_POST["id_acto"];
        $Orden = $_POST["orden"];
        $resultado_creacion = createPonente($Id_pesona,$Id_acto,$Orden);

        if ($resultado_creacion == 'Error al añadir ponente!'){
            return 'Error al añadir ponente!';
        }    
    } 
}

// Funcion para el enum de persona
function listarPersona() {
    $resultados = readUsuarios();
    if ($resultados){
        foreach($resultados as $usuario) {
            $Id_persona = $usuario['Id_Persona'];
            $Id_tipo_usuario = $usuario['Id_tipo_usuario'];
            $Username = $usuario['Username'];
            if ($Id_tipo_usuario == 2) {
                echo '<option value="' . $Id_persona. '">' . $Id_persona . ' ' . $Username . '</option>'; 
            }
        }
    }else{
        echo "No existen usuarios ponentes";
    }
}

// Funcion para el enum de acto
function listarActo() {
    $resultados = readActos();
    if ($resultados){
        foreach($resultados as $acto) {
            $Id_acto = $acto['Id_acto'];
            $Titulo = $acto['Titulo'];
            echo '<option value="' . $Id_acto. '">' . $Titulo . '</option>'; 
        }
    }else{
        echo "No existen actos";
    }
}

/***********************************************************************************************************/
/* FUNCIONES PARA GESTION TI_ACTOS */
function listarTipoActos() {
    $resultados = readTipoActos();

    if($resultados){
        foreach($resultados as $tipoActo){
            $Id_tipo_acto = $tipoActo['Id_tipo_acto'];
            $Descripcion = $tipoActo['Descripcion'];
            echo '<div class="tipoActo">';
            echo '  <span>ID: ' . $tipoActo['Id_tipo_acto'] . ', nombre: ' . $tipoActo['Descripcion'] . '</span>';
            echo '  <button class="btn btn-editar-acto " data-id="' . $tipoActo['Id_tipo_acto'] . '">Editar</button>';  
            echo '  <form method="POST" class="formulario-editar-tipoActo border p-3" style="display:none;">';
            echo '  <input type="hidden" name="Id_tipo_acto" value="' . $Id_tipo_acto . '">';
            echo '      <div class="form-group">';
            echo '          <label for="Descripcion">Descripcion del tipo de Acto</label>';
            echo '          <input type="text" name="Descripcion" id="Descripcion" class="form-control" required value="' . $Descripcion . '">';
            echo '      </div>';
            echo '      <div class="button-container">';
            echo '      <button type="submit" name="guardar_cambios" class="btn btn-primary">Aplicar</button>';
            echo '      <button type="submit" name="eliminar_tipoActo" class="btn btn-danger eliminar">Eliminar</button>';
            echo '      </div>';
            echo '  </form>';
            echo '</div>';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar_cambios'])) {
                // Obtén los valores del formulario
                $Id_tipo_acto = $_POST['Id_tipo_acto'];
                $Descripcion = $_POST['Descripcion'];
             
                updateTipoActo($Id_tipo_acto, $Descripcion);
                echo '<meta http-equiv="refresh" content="0;url=./tipo_evento.php">';

            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar_tipoActo'])) {
                // Obtén los valores del formulario
                $Id_tipo_acto = $_POST['Id_tipo_acto'];
                
                deleteTipoActo($Id_tipo_acto);
                echo '<meta http-equiv="refresh" content="0;url=./tipo_evento.php">';
            }
        }
    }else{
        echo "<p>No hay tipos de Actos en la lista.</p>";
    }
}

function añadirTipoActo() {
    if (isset($_POST["añadirTipoActo"])) {
        $Descripcion = $_POST["Descripcion"];
        
        $resultado_creacion = createTipoActo($Descripcion);

        if ($resultado_creacion == 'Error agregando el tipo de acto!'){
            return 'Error agregando el tipo de acto!';
        }    
    } 
}
