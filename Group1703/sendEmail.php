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


$ownerGame=$_SESSION['username'];



$sql = "SELECT gameCollection.Title, owns.copyID, members.firstName, members.lastName, members.email
            FROM gameCollection INNER JOIN owns ON owns.GameID = gameCollection.gameID INNER JOIN members ON owns.studentID = members.studentID";
try {
    $results = $conn->query($sql);

    if ($results->rowcount() == 0) {
        echo "We're sorry, but the game you have requested is currently unavailable <br />";
    } else {
        $user = $row["email"];
        $email = $_POST["confirmEmail"];
        $title = $row['Title'];
        $id = $row['copyID'];
        $first = $row['firstName'];
        $lastname = $row['lastName'];
        $email2 = $row['email'];


        require_once 'Swiftmailer/lib/swift_required.php';

        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername('gameshareteamrgu@gmail.com')
            ->setPassword('gameshare2016');

        $mailer = Swift_Mailer::newInstance($transport);
        $message = Swift_Message::newInstance('Borrow Request')
            ->setFrom(array('gameshareteamrgu@gmail.com' => 'GameShare Team'))
            ->setTo(array($email2=> 'Dear Valued Member'))
            ->setBody('You Have Recieved A Borrow Request @Gameshare. Please Contact them at ' . $email . ' to arrange a swap!

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


