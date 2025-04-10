<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailSMTP{
    
    static function send($to,$msg,$sub = "",$name = ""){
        $mail = new PHPMailer(true); 
        try {
    //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.mail.ru';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'shop-evacrimea@mail.ru';            // SMTP username
            $mail->Password = 'aHCthVBRa6k6ST5mdwj3';                     // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('shop-evacrimea@mail.ru', $sub);
            $mail->addAddress($to, $name);                        // Add a recipient

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $sub;
            $mail->Body    = $msg;
            $mail->AltBody = $msg;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
}



