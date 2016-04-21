<?

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


//email to volunteer function
        //function request_game()
        //{

        /*  $name = $first . " " . $lastname;*/

        //email subject
        $subject = 'You have received a borrow request';
        $name = $_SESSION['username'];


        //email body in html
        //Put your own text in here, with html tags like <br> or whatever you want
        $txt = 'Hi ' . $name . ', <br>You have received a request to borrow one of your games. Please see the details below.
                <table>
                    <th>Title</th><th>Copy ID</th><th>BorrowerID</th>
                    <td>
                <br>Please contact the user using there RGU email which is: ' . $_SESSION['username'] . '@rgu.ac.uk.
                <br>If you agree upon a loan, then please remember to update the availability of said game on your profile.
                <br>Regards,<br>   GameShare

              ';

    }


        require_once 'Swiftmailer/lib/swift_required.php';

        $transport = Swift_SmtpTransport::newInstance('smtp.office365.com', 587, 'tls')
            ->setUsername('gamesharergu@outlook.com')
            ->setPassword('GamesharegroupC');

        $mailer = Swift_Mailer::newInstance($transport);
        $message = Swift_Message::newInstance('THIS IS THE SUBJECT')
            ->setFrom(array('gamesharergu@outlook.com' => 'YOUR NAME'))
            ->setTo(array('gamesharergu@outlook.com' => 'YOU'))
            ->setBody('This is the text of the mail send by Swift using SMTP transport.');
//$attachment = Swift_Attachment::newInstance(file_get_contents('path/logo.png'), 'logo.png');  
//$message->attach($attachment);
        $numSent = $mailer->send($message);
        printf("Sent %d messages\n", $numSent);

    }
catch
    (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();


    }

?>