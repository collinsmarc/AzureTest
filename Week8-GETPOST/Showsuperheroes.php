<?php
include("connection.php"); //establish connection to DB

$sql="SELECT * FROM superheros";

$result=$db->query($sql);

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row["superheroID"] . "</td>";
    echo "<td>" . $row["firstName"] . "</td>";
    echo "<td>" . $row["lastName"] . "</td>";
    echo "<td>" . $row["power"] . "</td>";



}
