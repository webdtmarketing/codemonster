<?php

 $correo=$_GET["correo"];
 $nombre=$_GET["nombre"];
 $telefono=$_GET["telefono"];

 $fecha = date('d-m-Y h:i:s a', time());

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.dtmonsterleads.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'emailtest@dtmonsterleads.com';                     //SMTP username
    $mail->Password   = 'A3r02*21**';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('emailtest@dtmonsterleads.com', 'Dt Monster Leads');
    $mail->addAddress('tomas.jimenez.flores@gmail.com', 'Tomas Jimenez');  
    $mail->addAddress('nochesdigitales@gmail.com', 'Rafa Guerrero');   //Add a recipient

    //Attachments


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nuevo Registro DT Monster dtmonsterleads';
    $mail->Body    = '<img src="https://home.dtmonsterleads.com/wp-content/uploads/2023/09/Logo.png" alt="" class="powe" width="200"><br>Correo: '.$correo.'<br>Nombre: '.$nombre.'<br>Numero Telefónico: '.$telefono.'<br>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>window.location='thankyou.php'</script>";
} catch (Exception $e) {
    echo "Error al enviar: {$mail->ErrorInfo}";
}