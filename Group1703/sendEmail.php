<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:home.php");
}

try {
    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
    $username = "b52b6c6935c6d2";
    $password = "26ebeed0";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT gameCollection.Title, owns.copyID, members.firstName, members.lastName, members.email
            FROM gameCollection INNER JOIN owns ON owns.GameID = gameCollection.gameID INNER JOIN members ON owns.studentID = members.studentID";
    $results = $conn->exec($sql);
    foreach ($results as $row) {
        $title = $row['Title'];
        $id = $row['copyID'];
        $first = $row['firstName'];
        $lastname = $row['lastName'];
        $email = $row['email'];


        $txt = 'Hi '.$name.', <br>You have received a request to borrow one of your games. Please see the details below.
                <table>
                    <th>Title</th><th>Copy ID</th><th>BorrowerID</th>
                    <td>'.$title = $row["Title"].'</td>
                    <td>'.$id = $row["copyID"].'</td>
                    <td>'.$_SESSION['username'].'</td>
                </table>
                <br>Please contact the user using there RGU email which is: '.$_SESSION['username'].'@rgu.ac.uk.
                <br>If you agree upon a loan, then please remember to update the availability of said game on your profile.
                <br>Regards,<br>   GameShare
              ';

        require_once 'Swiftmailer/lib/swift_required.php';

        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername('gameshareteamrgu@gmail.com')
            ->setPassword('gameshare2016');

        $mailer = Swift_Mailer::newInstance($transport);
        $message = Swift_Message::newInstance('Borrow Request')
            ->setFrom(array('gameshareteamrgu@gmail.com' => 'GameShare Team'))
            ->setTo(array($_SESSION['username'] => 'Valued Gameshare Member'))
            ->setBody($txt);
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');
//$message->attach($attachment);
        $numSent = $mailer->send($message);
        printf("Sent %d messages\n", $numSent);
    }
}catch(PDOException $e){

    echo 'failed';
}






















/*require_once 'Swiftmailer/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
    ->setUsername('gameshareteamrgu@gmail.com')
    ->setPassword('gameshare2016');

$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance('Borrow Request')
    ->setFrom(array('gameshareteamrgu@gmail.com' => 'GameShare Team'))
    ->setTo(array('1510646@rgu.ac.uk' => 'Valued Gameshare Member'))
    ->setBody('You Have Recieved A Borrow Request @Gameshare Please Check your Portal.

    Thank You
    GameShare');
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');  
//$message->attach($attachment);
$numSent = $mailer->send($message);
printf("Sent %d messages\n", $numSent);*/
?>