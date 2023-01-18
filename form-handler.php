<?php
$name=$_POST['name'];
$visistor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'info@frstn.com'

$email_subject = 'New Form Submission'

$email_from = "User Name : $name.\n"
               "User Email : $visitor_email.\n"  
                "Subject : $subject.\n"
                "User Message : $message.\n";

$to='keremilhan4032@gmail.com';

$headers="From: $email_form \r\n"


$headers .="Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers)


header("Location:contact.html")


?>