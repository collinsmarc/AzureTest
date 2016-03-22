<?php
include("connection.php"); //establish connection to DB
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Battle Display</title>
</head>

<header>
    <h1>Battles Fought Thus Far</h1>

    </header>

<main>
    <h2> Here are the Battles Fought</h2>
    <?
    $sql="SELECT * FROM superherobattles";
    $result=$db->query($sql);

    while($row=$result->fetch_array()){
        echo "<tr>";
            echo "<td>" . $row["firstname"] ."<p>  <p>" . "</td>";
            echo "<td>" . $row["lastname"] ."<p>  <p>" . "</td>";
            echo "<td>" . $row["mainSuperPower"] ."<p>  <p>" . "</td>";
            echo "<td>" . $row["villanFought"] ."<p>  <p>" . "</td>";

    }





    ?>





    </main>




