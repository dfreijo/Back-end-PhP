<?php


function updatePonente($id_ponente, $Id_persona, $Id_acto, $Orden) {

    //Se actualiza segun el ID proporcionado.
    $consulta = "UPDATE eventos.Lista_Ponentes SET Id_persona='$Id_persona', Id_acto='$Id_acto', Orden='$Orden' WHERE id_ponente='$id_ponente'";

    $resultado = connection::ejecutar_consulta($consulta);
}
