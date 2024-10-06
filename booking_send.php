<?php
//we need to get our variables first

$email_to =   'info@stuidios16.com'; //the address to which the email will be sent 
$name     =   $_POST['booking_name'];
$email    =   $_POST['booking_email'];
$checkin   =   $_POST['booking_checkin'];
$checkout  =   $_POST['booking_checkout'];
$roomtype  =   $_POST['booking_room'];
$adult  =   $_POST['booking_adult'];
$child  =   $_POST['booking_child'];
$subject = "Enquiry for Book Your ROOM";

$htmlContent = "

    Hello <strong>Studio 16</strong>,
    {$_POST['booking_name']} has sent you a booking enquiry.
    Here are the details: <br/>
    <strong>Name:</strong> {$name}<br/>
    <strong>Email:</strong> {$email}<br/>
    <strong>Checkin:</strong> {$checkin}<br/>
    <strong>Checkout:</strong> {$checkout}<br/>
    <strong> Room type:</strong> {$roomtype}<br/>
    <strong> Adult:</strong> {$adult}<br/>
    <strong> Child:</strong> {$child}<br/>
        ";
/*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
     who are we replying to. */
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers  .= "From: $name\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($email_to, $subject, $htmlContent, $headers)) {
  echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
} else {
  echo 'failed'; // ... or this one to tell it that it wasn't sent    
}
