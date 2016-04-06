<<<<<<< Updated upstream
<?php

error_reporting(-1);

$dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
$username = "b52b6c6935c6d2";
$password = "26ebeed0";
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "";

    $title = $_POST['title'];

    $year = $_POST['year'];

    $genre = $_POST['genre'];

    $platform = $_POST['platform'];

    $age = $_POST['age'];
    
    $desc= $_POST['desc'];


    $sql = "INSERT INTO gameCollection (GameID, Title, Year, Genre, Platform, Age Rating, Description) VALUES ('46','test', '2015', 'Action', 'PS4', '15','test')";

    $conn->exec($sql);
    echo "New record created successfully";
    header("Location:memberSite.php");

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
=======
<?php

error_reporting(-1);

$dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
$username = "b52b6c6935c6d2";
$password = "26ebeed0";
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "";

    $title = $_POST['title'];

    $year = $_POST['year'];

    $genre = $_POST['genre'];

    $platform = $_POST['platform'];

    $age = $_POST['age'];
    
    $desc= $_POST['desc'];


    $sql = "INSERT INTO gameCollection (GameID, Title, Year, Genre, Platform, Age Rating, Description) VALUES ('46','test', '2015', 'Action', 'PS4', '15','test')";

    $conn->exec($sql);
    echo "New record created successfully";
    header("Location:memberSite.php");

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
>>>>>>> Stashed changes
?>