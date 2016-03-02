<?php
error_reporting(-1);


$dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
$username = "b52b6c6935c6d2";
$password = "26ebeed0";
try {
    $conn = new PDO( $dsn, $username, $password );
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) {
    echo "Connection failed: " . $e->getMessage();

    $query = "";
    $title = $_REQUEST['title'];

    if(isset($title)){//if keyword set goes here
        $query = "SELECT * FROM gameCollection WHERE Title LIKE '%$title%'" ;

}
}
