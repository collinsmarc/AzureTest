<?

session_start();
if(!isset($_SESSION['username'])){
    header("Location:home.php");
}
//email to volunteer function
//
try {
    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
    $username = "b52b6c6935c6d2";
    $password = "26ebeed0";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    /*$sql = "SELECT gameCollection.Title, owns.copyID, members.firstName, members.lastName, members.email
            FROM gameCollection INNER JOIN owns ON owns.GameID = gameCollection.gameID INNER JOIN members ON owns.studentID = members.studentID";

    $results = $conn->exec($sql);
    foreach ($results as $row) {
        $title = $row['Title'];
        $id = $row['copyID'];
        $first = $row['firstName'];
        $lastname = $row['lastName'];
        $email = $row['email'];*/


//email to volunteer function
        //function request_game()
        //{

          /*  $name = $first . " " . $lastname;*/

            //email subject
            $subject = 'You have received a borrow request';
         $name=$_SESSION['username'];


            //email body in html
            //Put your own text in here, with html tags like <br> or whatever you want
            $txt = 'Hi '.$name.', <br>You have received a request to borrow one of your games. Please see the details below.
                <table>
                    <th>Title</th><th>Copy ID</th><th>BorrowerID</th>
                    <td>
                <br>Please contact the user using there RGU email which is: '.$_SESSION['username'].'@rgu.ac.uk.
                <br>If you agree upon a loan, then please remember to update the availability of said game on your profile.
                <br>Regards,<br>   GameShare

              ';



           ///take in the necessary swiftmailer code
            require_once 'Swiftmailer/lib/swift_required.php';

            //this is all swiftmailer magic, using the gmail smtp server of my account...
            $transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587 ,'ssl')
                ->setUsername('marc.collins.08@aberdeen.ac.uk')
                ->setPassword('GamesharegroupC');

            //Creates an instance of the mailer
            $mailer = Swift_Mailer::newInstance($transporter);

            //the message supplies some more detailed info
            $message = Swift_Message::newInstance('You have received a borrow request')
                ->setFrom(array('gamesharergu@gmail.com' => 'Webmaster@GameShare'))//shows my name when email arrives
                ->setTo(array($email => $name))//shows volunteer name as linked to their email address
                ->setBody($txt, "text/html");  //tells swiftmailer that we're using html text

            //Finally the mail is sent
            $result = $mailer->send($message);

        header("Location:memberSite.php");

       /* // using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
        require("sendgrid-php/sendgrid-php.php");
        require "config.php";

        $sendgrid = new SendGrid($apiKey);
        $email    = new SendGrid\Email();

        $email->addTo("1510646@rgu.ac.uk")
            ->setFrom("gamesharergu@gmail.com ")
            ->setSubject("Sending with SendGrid is Fun")
            ->setHtml("and easy to do anywhere, even with PHP");

        $sendgrid->send($email);
*/







} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();


}




?>