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
    ->setBody('Hi '.$name.', <br>You have received a request to borrow one of your games. Please see the details below.
                <table>
                   <th>Title</th><th>Copy ID</th><th>BorrowerID</th>
                    <td>'.$title = $row["Title"].'</td>
                    <td>'.$id = $row["copyID"].'</td>
                    <td>'.$_SESSION['username'].'</td>
                </table>
                <br>Please contact the user using there RGU email which is: '.$_SESSION['username'].'@rgu.ac.uk.
                <br>If you agree upon a loan, then please remember to update the availability of said game on your profile.
                <br>Regards,<br>   GameShare

              '

    );
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');  
//$message->attach($attachment);
$numSent = $mailer->send($message);
printf("Sent %d messages\n", $numSent);
?>