<? session_start();
if (!isset($_SESSION['username'])) {
    header("Location:index.html");}


error_reporting(-1);

$dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
$username = "b52b6c6935c6d2";
$password = "26ebeed0";
try {    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "";

    $id=$_SESSION['username'];
    $condition=$_POST['conditionGame'];
    $gameID=$_POST['Titles'];
/*    $title=$_POST['Titles'];

    $platform = $_POST['platformSelectDrop'];
    if (!isset($platform)) {
        $platform = '%';
    }




    $query = "SELECT * FROM gamecollection WHERE Platform Like '$platform' AND Title LIKE '$title'";
    $result = $conn->query($query);
    foreach($result as $row) {

        $Gameid = $row['GameID'];

    }*/

    $sql = "INSERT INTO owns (gameID, studentID, copyID, game_condition) VALUES ('$gameID','$id','1','$condition')";


    $conn->exec($sql);
    echo "New record created successfully";


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>
