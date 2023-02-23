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
          id="correoElectronico" name="correoElectronico" onkeyup="HabilitarCampos()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" 
          id="contrasena" name="contrasena" onkeyup="HabilitarCampos()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <input type="submit" class="btn btn-primary btn-block" 
            id="btnIniciarSesion" name="btnIniciarSesion" value="Iniciar Sesion" disabled/>

          </div>
        </div>
      </form>
      <p class="mb-1">
        <a href="forgot-password.html">Olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="registrarUsuario.php" class="text-center">Registerme</a>
      </p>
    </div>
  </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="js/Authentication.js"></script>
</body>



</html>

