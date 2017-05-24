<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="REQUEST FOR BOOKING";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["special-requirements"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

     $thankYou="<p>Thank you! Your message has been sent.</p>";
   }
?>
