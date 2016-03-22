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

    echo "<th>First Name</th><th>Last Name</th><th>Power</th><th>Villan Fought</th>";


    while($row=$result->fetch_array()){
        echo "<tr>";
            echo "<td>" . $row["firstname"] ."&nbsp &nbsp" . "</td>";
            echo "<td>" . $row["lastname"] ."&nbsp &nbsp"."</td>";
            echo "<td>" . $row["mainSuperPower"] ."&nbsp &nbsp" . "</td>";
            echo "<td>" . $row["villanFought"] ."&nbsp &nbsp" . "</td>";
        echo "<p> </p>";

    }





    ?>





    </main>




