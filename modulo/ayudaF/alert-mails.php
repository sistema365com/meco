<?php 
date_default_timezone_set("America/Argentina/Buenos_Aires");

function ticketCreado() {
  // variables fijas
    $host= 'smtp.mandrillapp.com';
    $puerto=587;
    $username='kenshopublicidad';
    $pass='RRaB_2eCZHzqCgjU2Hww1g';
    $dominio='mercadoconnecting.com';
    $nombre= 'MercadoConnecting';
    $nombreRemitente= 'Usuario MercadoConnecting';
    $emailRemitente= 'soporte@mercadoconnecting.com';
  $emailDestinatario= 'jpradi@kenshopublicidad.com';
	$date= date('H:i:s');
	$asunto= 'Ticket de soporte Creado '.$date;
$email_content= 'un usuario creo un ticket de soporte';
	   require '../../PHPMailer/class.phpmailer.php';
    $mail = new PHPMailer(true);
    // $mail->IsSMTP();
    try {
        $mail->SMTPAuth=true;
        // $mail->SMTPSecure = 'ssl';
        $mail->Host=$host;
        $mail->Port=$puerto;
        $mail->Username=$username;
        $mail->Password=$pass;
        $mail->SMTPDebug=0;
        $mail->Helo = $dominio; //Muy importante para que llegue a hotmail y otros,opcional
        $mail->AddAddress($emailDestinatario);
        $mail->AddAddress('javier.barbano@mazalsoft.com');
        if ($vartemp != "") {
        $mail->AddAttachment($vartemp, $varname);
        }
        // $mail->AddBCC("otrocorreo");  //Copia oculta, opcional
        $mail->IsHTML(true); //Opcional
        $mail->Subject=$asunto;
        // $mail->From=$emailRemitente;
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom($emailRemitente, $nombreRemitente);
        $mail->AddReplyTo($emailRemitente, $nombreRemitente);
        $mail->FromName= $nombre;
        $mail->Timeout=30;
        $mail->Body= $email_content;
        // $mail->AltBody = strip_tags("tu mensaje"); 
        $exito=$mail->Send();
        if($exito) { $msg= "correo enviado";
        return true;
        }
        else  $msg= "No se pudo enviar el correo";
    }
     catch (phpmailerException $e){
        $msg= "Servicio no disponible!";
    }
     catch (Exception $e) {
        $msg= "Servicio no disponible!";
    }

}
 ?>