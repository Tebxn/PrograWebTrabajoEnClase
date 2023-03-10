<?php

include_once 'ConexionModel.php';


function IniciarSesionModel($correoElectronico, $contrasena)
{
    $instancia = Open();
    
    $sentencia = "CALL IniciarSesion('$correoElectronico','$contrasena');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);
    
    return $respuesta;
}

function RegistrarUsuarioModel($correoElectronico, $contrasena)
{
    $instancia = Open();
    
    $sentencia = "CALL RegistrarUsuario('$correoElectronico','$contrasena');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);
    
    return $respuesta;
}

function BuscarUsuarioModel($correoElectronico)
{
    $instancia = Open();
    
    $sentencia = "CALL ValidarCorreo('$correoElectronico');";
    $respuesta = $instancia -> query($sentencia);

    Close($instancia);
    
    return $respuesta;
}



?>