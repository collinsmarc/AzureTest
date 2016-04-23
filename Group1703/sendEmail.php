<?php


        $email = $_POST["confirmEmail"];



        require_once 'Swiftmailer/lib/swift_required.php';

        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername('gameshareteamrgu@gmail.com')
            ->setPassword('gameshare2016');

        $mailer = Swift_Mailer::newInstance($transport);
        $message = Swift_Message::newInstance('Borrow Request')
            ->setFrom(array('gameshareteamrgu@gmail.com' => 'GameShare Team'))
            ->setTo(array('1510646@rgu.ac.uk'=> 'Dear Valued Member'))
            ->setBody('You Have Recieved A Borrow Request @Gameshare. Please check your member portal to see the details, and if you are happy to proceed contact them at ' . $email . ' to arrange a swap!

    Thank You
    GameShare');
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');
//$message->attach($attachment);
        $numSent = $mailer->send($message);
        header("Location:memberSite.php");





?>


