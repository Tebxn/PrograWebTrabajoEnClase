<?php

include_once '../Models/UsuariosModel.php';

function ConsultarUsuarios()
{
    $respuesta = ConsultarUsuariosModel();

    if($respuesta -> num_rows > 0)
    {
        while($row = mysqli_fetch_array($respuesta))
        {
            echo "<tr>";
                echo "<td>" . $row['CorreoElectronico'] . "</td>";
                echo "<td>" . $row['NombreTipoUsuario'] . "</td>";
                echo "<td>" . $row['DescEstado'] . "</td>";
                

                if($_SESSION["tipoUsuario"] == 1)    
                {
                    echo "<td>
                    <a href='../Views/actualizarUsuario.php'>Actualizar</a> | <a href=''>Eliminar</a>
                    </td>";
                }else{
                    echo "<td>      
                    <a href='../Views/actualizarUsuario.php'>Actualizar</a>
                    </td>";
                }  
                
                
            echo "</tr>";

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

function ConsultarPerfiles()
{
    $respuesta = ConsultarUsuariosModel();

    if($respuesta -> num_rows > 0)
    {
        while($row = mysqli_fetch_array($respuesta))
        {
            echo "<option value=" . $row['ConsecutivoUsuario'] . $row['ConsecutivoUsuario'] . "</option>";
        }
    }
}


?>