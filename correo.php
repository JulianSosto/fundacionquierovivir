<?php

if (isset($_POST['enviar'])) {
    
  if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message']) && ) {

    //declaro las variables
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $email= $_POST['email'];
    $message = $_POST['message'];
    $header= "From: noreply@example.com" . "/r/n";
    $header .= "Reply-To: noreply@example.com" . "/r/n";
    $header .="X-Mailer: PHP/" . phpversion;
    //Se le envía a email y ademas a quien
    $mail = @mail($email,$subject,$message,$header);
  }
}