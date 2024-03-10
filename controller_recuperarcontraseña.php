<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    require("conexion.php");

    $email =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $Pass = 
    

    $sql = "SELECT * FROM usuarios WHERE u_email = '$email'";
    $result = $conexion->query($sql);

    if($result -> num_rows === 1){

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'tucorreo';                     //SMTP username
            $mail->Password   = 'tucontra';                               //SMTP password
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('luisg300k@hotmail.com', 'Mailer');
            $mail->addAddress('luisg300k@hotmail.com', 'Gerardo');     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Recuperación de contraseña';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


    }
    else{
        header("Location: Recuperar_contraseña.php?error=El correo electrónico ingresado no es válido. 
        Por favor, verifica que hayas ingresado la dirección correcta");
        exit();
    }
?>