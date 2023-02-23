<?php

include_once '../Models/AuthenticationModel.php';

if(session_status() == PHP_SESSION_NONE) 
{
    session_start();
}




if(isset($_POST["btnIniciarSesion"]))
{
    $correoElectronico = $_POST["correoElectronico"];
    $contrasena = $_POST["contrasena"];

    $respuesta = IniciarSesionModel($correoElectronico, $contrasena);

    if($respuesta -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($respuesta);

        $_SESSION["consecutivoUsuario"] = $datosUsuario["ConsecutivoUsuario"];
        $_SESSION["correoElectronico"] = $datosUsuario["CorreoElectronico"];

        header("Location: ../Views/principal.php");
    }else
    {
        header("Location: ../Views/login.php");
    }
}

if(isset($_POST["btnRegistrarse"]))
{
    $correoElectronico = $_POST["correoElectronico"];
    $contrasena = $_POST["contrasena"];
    $contrasena2 = $_POST["contrasena2"];

    if($contrasena == $contrasena2)
    {
        $respuesta = RegistrarUsuarioModel($correoElectronico, $contrasena);

        if($respuesta == true)
        {
            echo '<script>alert("USUARIO REGISTRADO")</script>';
            header('Refresh:5 ; URL=../Views/login.php');
        }
        else
        {
            header("Location: ../Views/registrarUsuario.php");
        }
    }else
    {
        echo '<script>alert("ERROR")</script>';
    }
}

if(isset($_POST["btnCerrarSesion"]))
{
    session_destroy();
    header("Location: ../Views/login.php");
}

?>