<?php
require_once 'Swiftmailer/lib/swift_required.php';
$name=$_SESSION['username'];

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
    ->setUsername('gamesharergu@gmail.com')
    ->setPassword('GamesharegroupC');

$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('THIS IS THE SUBJECT')
    ->setFrom(array('gamesharergu@gmail.com' => 'YOUR NAME'))
    ->setTo(array('gamesharergu@gmail.com' => 'YOU'))
    ->setBody('Hi ' );
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');  
//$message->attach($attachment);
$numSent = $mailer->send($message);
printf("Sent %d messages\n", $numSent);
?>