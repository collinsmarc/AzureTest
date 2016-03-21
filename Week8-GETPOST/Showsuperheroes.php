<?php
include("connection.php"); //establish connection to DB

$sql="SELECT * FROM superheros";

$result=$db->query($sql);

while($row=$result->fetch_array()){
    echo "<p>.$superheroID. $firstName. $lastName. $mainSuperpower.<br>";

}
