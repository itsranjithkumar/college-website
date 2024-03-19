<?php
$name = $_post['name'];
$visitors_email = $_post['email'];
$Subject = $_post['subject'];
$message = $_post['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'new form submission';

$email_body = "user Name: $name.\n".
               "user Email: $visitors_email".\n"
               "subject: $subject.\n"
               user Message: $message".\n" 

$to = 'avinash6252@gmail.com';

$header = "form: $email_from \r\n";

$header = "replay To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,);

header("location: contact.html");




?>
