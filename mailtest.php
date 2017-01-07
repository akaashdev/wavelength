<?php
ini_set();
$to      = 'heatblast.akaash@gmail.com';
$subject = 'Test';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "Mail sent";
?> 