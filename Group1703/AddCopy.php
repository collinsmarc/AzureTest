<? session_start();
if (!isset($_SESSION['username'])) {
    header("Location:index.html");


    error_reporting(-1);

    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
    $username = "b52b6c6935c6d2";
    $password = "26ebeed0";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;

        /*$sql = "SELECT MAX(copyID) FROM (SELECT copyID FROM owns INNER JOIN gamecollection
                ON owns.gameID = gamecollection.GameID
                WHERE gamecollection.Title = '" . $_POST['Titles'] . "')";


        $copyID = 0;

        try {
            $results = $conn->query($sql);

            if ($results->rowcount() == 0) {
               $copyID = 1 ;
            } else {
                $copyID = $results + 1;
            }
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }*/

        $select = "SELECT gameID FROM gamecollection WHERE gamecollection.Title = '" . $_POST['Titles'] . "')";
        $gameID = $conn->query($select);

        $id = $_SESSION['username'];
        $condition = $POST['conditionGame'];


        $add = "";


        $add = "INSERT INTO owns (gameID,studentID,copyID,game_condition) VALUES ('$gameID','$id','2','$condition')";

        $conn->exec($add);
        echo "New record created successfully";
        header("Location:memberSite.php");

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;

}
            ?>




