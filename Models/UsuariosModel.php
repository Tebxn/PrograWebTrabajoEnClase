<?php

include_once 'ConexionModel.php';

function ConsultarUsuariosModel()
{
    $instancia = Open();
    
    $sentencia = "CALL MostrarUsuarios();";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);
    
    return $respuesta;
}

?>