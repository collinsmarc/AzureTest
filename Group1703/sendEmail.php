<?php

//header("Location:results.html");

error_reporting(-1);

$dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
$username = "b52b6c6935c6d2";
$password = "26ebeed0";
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$ownerGame = $_GET['user'];



$query = "SELECT members.email FROM members WHERE studentID LIKE '$user'";
try {
    $results = $conn->query($query);

    if ($results->rowcount() == 0) {
        echo "We're sorry, but the game you have requested is currently unavailable <br />";
    } else {
        $user = $row["email"];
        $email = $_POST["confirmEmail"];


        require_once 'Swiftmailer/lib/swift_required.php';

        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername('gameshareteamrgu@gmail.com')
            ->setPassword('gameshare2016');

        $mailer = Swift_Mailer::newInstance($transport);
        $message = Swift_Message::newInstance('Borrow Request')
            ->setFrom(array('gameshareteamrgu@gmail.com' => 'GameShare Team'))
            ->setTo(array($user => 'Dear Valued Member'))
            ->setBody('You Have Recieved A Borrow Request @Gameshare from ' . $user . ' Please Contact them at ' . $email . ' to arrange a swap!

    Thank You
    GameShare');
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');
//$message->attach($attachment);
        $numSent = $mailer->send($message);
        header("Location:memberSite.php");
    }
    }catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
$conn = null;


?>


