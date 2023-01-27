<?php

$name=$_POST['name'];
$visitor_email;=$_POST['email'];
$visitor_subject;=$_POST['subject'];
$visitor_message;=$_POST['message'];

$email_from = '';
$email_subject='New Form Submission';
$email_body="user name :$name.\n".
"user email :$visitor_email.\n".
"user subject :$visitor_subject.\n".
"user message :$visitor_message.\n";

$to='soa548277@gmail.com';
$headers="From : $email_from \r \n";
$headers .="Reply-To :$visitor_email \r \n ";

mail($to,$email_subject,$email_body,$headers);

header("Location :contact.html");
?>