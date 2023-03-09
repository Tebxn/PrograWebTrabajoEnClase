<?php
    include_once '../Models/FilesModel.php';

    

    if(isset($_POST["btnSubirArchivo"]))
    {
       $dir = "../files/";

       $_FILES['uploadFile']['name'];
       $files_route = $dir . $_FILES['uploadFile']['tmp_name'];

        if(!file_exists($dir))
        {
            mkdir($dir, 0777);
        }

       if(move_uploaded_file($_FILES['uploadFile']['tmp_name'], $files_route))
       {
            echo "Archivo cargado correctamente";
       }else{
            echo "ERROR";
       }

    }
?>