<?php
include_once '../Controllers/AuthenticationController.php';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/Authentication.css">
  
</head>

<body class="hold-transition login-page fondo">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Progra</b>Web</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia sesion para iniciar</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo Electronico" 
          id="correoElectronico" name="correoElectronico" required onblur="ValidarCorreo();">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div id="mensaje"></div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" 
          id="contrasena" name="contrasena" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirmar Contraseña" 
          id="contrasena2" name="contrasena2" required onblur="HabilitarRegistro()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">

          <div id="mensajeContrasena"></div>

            <input type="submit" class="btn btn-primary btn-block" 
            id="btnRegistrarse" name="btnRegistrarse" value="Registrarse" disabled/>

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
  <script src="js/Authentication.js"></script>
</body>


<<<<<<< HEAD
<script>

    $('#correoElectronico').blur(function(e){
      e.preventDefault();
  
      var email = $('#correoElectronico').val();
      var dataString = 'email='+email;

      $.ajax({
        type: "POST",
        url: 'Ajax/ValidarCorreo.php',
        data: ('email='+email),
        beforeSend: function(){
          console.log(email);
        },
        success: function(respuesta){
          console.log(respuesta);
          if(respuesta == '1'){
            console.log('Correo electronico ya ha sido registrado');
            $('#mensaje').html('Correo electronico ya ha sido registrado');
          }else{
            console.log('Correo electronico valido');
            $('#mensaje').html('Correo electronico valido');
            $("#contrasena").prop("disabled", false);
            $("#contrasena2").prop("disabled", false);
          }
        },
        error: function(xhr) { // if error occured
        alert("Error occured.please try again");
        $(placeholder).append(xhr.statusText + xhr.responseText);
         $(placeholder).removeClass('loading');
     }
      })
    })



    </script>

=======
>>>>>>> d6308fb05b2b9d97e8a6dd6a97588d0bf5d438b6
</html>
