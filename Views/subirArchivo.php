<?php
    include_once '../Controllers/FilesController.php';
    include_once 'utilitarios.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"></head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        Archivo:
        <input type="file" name="uploadFile" id="uploadFile" />

        <button type="submit" name="btnSubirArchivo" id="btnSubirArchivo">Enviar</button>
    </form>

</body>
</html>
