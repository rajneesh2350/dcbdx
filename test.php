<?php
// Some data for the message
$mailTo = "rajneesh2350@yahoo.co.in ";
$mailFrom = "rajneesh2350@gmail.com";
$mailFromName = "Some One";
$mailSubject = "Your Subject";
$mailMessage = "Your Test message.";

// Send mail
mail($mailTo, $mailSubject, $mailMessage, "From: $mailFromName <$mailFrom>\r\n");
?>
