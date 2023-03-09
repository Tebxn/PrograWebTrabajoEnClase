<?php
    include_once 'utilitarios.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema MN</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <?php
    MostrarMenu();
  ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">Actualizar Informacion</p>

                            <form action="" method="post">

                                <div class="row">
                                    <div class="col-6">

                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Correo Electronico"
                                                id="correoElectronico" name="correoElectronico" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Contraseña"
                                                id="contrasena" name="contrasena" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Identificacion"
                                                    id="identificacion" name="identificacion" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-user"></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-4">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nombre" id="nombre"
                                                    name="nombre" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-user"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="input-group mb-3">
                                            <select name="" id=""></select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php
    MostrarFooter();
  ?>

    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>