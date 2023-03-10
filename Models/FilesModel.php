<?php

    function EnviarMail($correoDestinatario, $asunto, $cuerpo, $urlArchivo, $nombreArchivo)
    {
        require '../PHPMailer/src/PHPMailer.php';
        require '../PHPMailer/src/SMTP.php';

        $mail = new PHPMailer (true);
        $mail -> CharSet = 'UTF-8';

        $mail -> IsSMTP();
        $mail -> Host = 'smtp.office365.com';// 'smtp.gmail.com';
        $mail -> SMTPSecure = 'tls';
        $mail -> Port = 587; // 465 // 25
        $mail -> SMTPAuth = true;
        $mail -> Username = 'esanchez50184@ufide.ac.cr';
        $mail -> Password = '3\$t3B4n0903';

        $mail -> SetFrom('esanchez50184@ufide.ac.cr', 'Prueba de correo');
        $mail -> Subject = $asunto;
        $mail -> MsgHTML($cuerpo);
        $mail -> AddAddress($correoDestinatario, 'UsuarioSistema');
        $mail -> AddAttachment($urlArchivo, $nombreArchivo);

        $mail->send();

    }
?>