    
<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$opciones = $_POST['opciones'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $fullname . " \r\n";
$message .= "Su Correo es: " . $email . " \r\n";
$message .= "Empresa: " . $empresa . " \r\n";
$message .= "Opciones: " . $opciones . " \r\n";
$message .= "Comentario: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'em341025@gmail.com';
$asunto = 'Mensaje de... (Cliente interesado en Genomax)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
