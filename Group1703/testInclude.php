<?php
header("Content-type: text/plain");
require("sendgrid-php/sendgrid-php.php");
require "config.php";

$sendgrid = new SendGrid($apiKey);
$email    = new SendGrid\Email();

$email->addTo("1510646@rgu.ac.uk")
    ->setFrom("gamesharergu@gmail.com ")
    ->setSubject("Sending with SendGrid is Fun")
    ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);
?>

