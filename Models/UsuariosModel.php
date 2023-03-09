<?php

include_once 'ConexionModel.php';

function ConsultarUsuariosModel()
{
    $instancia = Open();
    

    $usuario = $_SESSION["correoElectronico"];
    $tipoUsuario = $_SESSION["tipoUsuario"];

    $sentencia = "CALL MostrarUsuarios('$usuario','$tipoUsuario');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);
    
    return $respuesta;
}

?>