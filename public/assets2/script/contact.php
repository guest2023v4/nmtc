<?php
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
function sanitize_message($message){
    $message = strip_tags($message);
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    $message = trim($message);
    $message = preg_replace('/[^A-Za-z0-9\. -]/', '', $message);
    return $message;
}
$name = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['msg'];

$sanitized_message = sanitize_message($message);
$sanitized_name = sanitize_message($name);
//Remove any whitespaces
$email = trim($email);

// Use filter_var to validate the email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email address is invalid
    echo json_encode(array("success"=>false,"data"=>'', "param"=>''));
} else {
    $secret = '6LdohwwkAAAAAGQkyBIOMVQ_uVpEEg58aN9wMnoU';
    $response = $_POST['g-recaptcha-response'];
    
    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query(array(
                'secret' => $secret,
                'response' => $response
            )));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $responseData = json_decode(curl_exec($verify));
    curl_close($verify);
    
    if($responseData->success) {
        $mail = new PHPMailer(true);
  
        try {
            $mail->SMTPDebug = 2;                                       
            $mail->isSMTP();                                            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '1b989d1b5fac40';
            $mail->Password = '4e481f37e6c3b7';
          
            $mail->setFrom($email, $sanitized_name);           
            $mail->addAddress('nmtc@nmtc.tn');
            $mail->addAddress('nmtc@nmtc.tn', 'Name2');
               
            $mail->isHTML(true);                                  
            $mail->Subject = 'Mail from Contact form';
            $mail->Body    = $sanitized_message;
            $mail->AltBody = 'Body in plain text for non-HTML mail clients';
            $mail->send();
            echo json_encode(array("success"=>true,"data"=>'', "param"=>''));
        } catch (Exception $e) {
            echo json_encode(array("success"=>false,"data"=>'', "param"=>''));
        }
    } else {
        echo json_encode(array("success"=>false,"data"=>'', "param"=>''));
    }
   
}
?>