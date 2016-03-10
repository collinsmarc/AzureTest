<?php
session_start();
$message="";


if(count($_POST)>0) {
    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
    $username = "b52b6c6935c6d2";
    $password = "26ebeed0";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $result = mysql_query("SELECT * FROM members WHERE email='" . $_POST["Username"] . "' and password = '". $_POST["Password"]."'");
    $row  = mysql_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["user_id"] = $row[user_id];
        $_SESSION["user_name"] = $row[user_name];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["user_id"])) {
    header("Location:user_dashboard.php");
}
?>