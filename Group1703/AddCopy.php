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


    $sql = "INSERT INTO owns (gameID, studentID, copyID, game_condition) VALUES ('46','1510646','1','brand new')";


    $conn->exec($sql);
    echo "New record created successfully";


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>
