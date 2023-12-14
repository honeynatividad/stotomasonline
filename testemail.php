<?php

$firstname = 'hanna';
$subject = 'Your account has been deactivated';
$message = 'Dear '.$firstname."\r\n"."\r\n".'Your account has been deactivated. Contact our admin if you want to activate your account.'."\r\n"."\r\n".'Thank you.';
$email = 'honeynatividad@gmail.com'   ;

$to      = $email;
$headers = 'From: '.$email. "\r\n" .
'Reply-To:'.$email. "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>