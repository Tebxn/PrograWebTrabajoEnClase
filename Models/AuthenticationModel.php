<?php

include 'ConexionModel.php';

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


?>