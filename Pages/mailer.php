<?php

$email = $_POST['E-mail'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

    try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com;smtp.live.com';         // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'brianalexbrito@gmail.com';             // SMTP username
    $mail->Password   = 'ba27390271bm';                         // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('brianalexbrito@gmail.com', 'Informante');
    $mail->addAddress($email);              // Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');             // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        // Optional name

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'UPT Cambiar Contraseña';
    $mail->Body    = '<h1> Hola, </h1> ' . 
    '<hr></hr>' .
    'Recientemente pidio un cambio de contraseña para su cuenta de "Gestor UPT"<br>' . 
    'la clave para su cambio de contraseña es: <br>' .
    '<br>' . 
    '<h2>Ejemplo</h2> <br>' . 
    '<br>' . 
    'Si no ha pedido un cambio de contraseña, por favor ignore este mensaje<br>' . 
    'o contacte a soporte tecnico para mas informacion. El codigo solo sera<br>' . 
    'valido en las siguientes 24 horas de recibido. <br>' . 
    '<br>' . 
    'Gracias,<br>' . 
    'El equipo creativo tras Gestor UPT.<br>' . 
    'http://localhost/gestorupt-master/';
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo '<script>
        alert("El mensaje se envio correctamente");
        window.history.go(-1);
        </script>';
    } catch (Exception $e) {
    echo '<script>
        alert("No se encontro el correo electronico, intentelo de nuevo.");
        window.history.go(-1);
        </script>';
    }
?>