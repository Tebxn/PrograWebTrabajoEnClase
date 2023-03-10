<?php
    include_once '../Models/FilesModel.php';

    

    if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {

        if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {

            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName = $_FILES['uploadedFile']['name'];
            $fileSize = $_FILES['uploadedFile']['size'];
            $fileType = $_FILES['uploadedFile']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            //$newFileName = md5(time() . $fileName) . '.' . $fileExtension; Sirve como para encriptar el nombre

            $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf');

            if (in_array($fileExtension, $allowedfileExtensions)) {
                $uploadFileDir = './files/';
                $dest_path = $uploadFileDir . $fileName; //en el $fileName tendria que ponerse el $newFileName
                if(move_uploaded_file($fileTmpPath, $dest_path))
                {
                $message ='File is successfully uploaded.';
                if(EnviarMail('easanrui@gmail.com', 'Ejemplo asunto', '<br>HOLA</br>Bienvenido a el correo enviado', '../Views/files/ejemplo.pdf', 'ejemplo.pdf'))
                {
                    echo 'Correo enviado adecuadamente';
                    unlink('../Views/files/ejemplo.pdf');
                }else{
                    echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                }
            }
        }
    }
}
    
?>