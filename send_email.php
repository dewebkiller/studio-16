<?php
//we need to get our variables first

$email_to =   'info@stuidios16.com'; //the address to which the email will be sent
$name     =   $_POST['name'];
$email    =   $_POST['email'];
$phone    =   $_POST['phones'];
$subject  =   $_POST['subject'];
$message  =   $_POST['message'];


$htmlContent = "

    Hello <strong>Studio 16</strong>,
    {$_POST['name']} has sent you a enquiry.
    Here are the details: <br/>
    <strong>Name:</strong> {$_POST['name']} <br/>
    <strong>Email:</strong> {$_POST['email']} <br/>
    <strong>Phone:</strong> {$_POST['phone']} <br/>
    <strong>Subject:</strong> {$_POST['subject']} <br/>
    <strong>Message:</strong> {$_POST['message']} <br/>
        ";
/*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
     who are we replying to. */
     $headers = "MIME-Version: 1.0" . "\r\n"; 
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
     $headers  .= "From: $email\r\n";
     $headers .= "Reply-To: $email\r\n";

if (mail($email_to, $subject, $htmlContent, $headers)) {
    echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
} else {
    echo 'failed'; // ... or this one to tell it that it wasn't sent    
}
