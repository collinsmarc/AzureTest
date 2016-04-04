<?session_start();
if(!isset($_SESSION['username'])) {
    header("Location:index.html");


    error_reporting(-1);

    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
    $username = "b52b6c6935c6d2";
    $password = "26ebeed0";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id=$_SESSION['username'];
        $game=$row['gameID'];



        $sql = "DELETE FROM owns
WHERE studentID='$id'";

        $conn->exec($sql);
       

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
    header('Location: memberSite.php');
}
?>