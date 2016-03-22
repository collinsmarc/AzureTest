<?php
include("connection.php"); //establish connection to DB

$sql="SELECT * FROM superheros";

$result=$db->query($sql);

while($row=$result->fetch_array()){
    echo "<p>".$row['superheroID']. "   ".$row['firstName']. "   ".$row['lastName']."   ".$row['mainSuperpower']."<p></p>";

}
