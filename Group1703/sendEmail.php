<?session_start();
if(!isset($_SESSION['username'])){
    header("Location:home.php");
}
$user=($_SESSION['username']);
$email= $_POST["confirmEmail"];


            require_once 'Swiftmailer/lib/swift_required.php';

            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                ->setUsername('gameshareteamrgu@gmail.com')
                ->setPassword('gameshare2016');

            $mailer = Swift_Mailer::newInstance($transport);
            $message = Swift_Message::newInstance('Borrow Request')
                ->setFrom(array('gameshareteamrgu@gmail.com' => 'GameShare Team'))
                ->setTo(array($email => 'Dear Valued Member'))
                ->setBody('You Have Recieved A Borrow Request @Gameshare from ' . $user . ' Please Contact them at ' . $email . ' to arrange a swap!

    Thank You
    GameShare');
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');  
//$message->attach($attachment);
            $numSent = $mailer->send($message);
            printf("Sent %d messages\n", $numSent);

        

?>