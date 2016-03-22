<?php
include("connection.php"); //establish connection to DB

//insert into battle db

$superheroID=$_POST["superhero"];
$villan=$_POST["villan"];




$sql="INSERT INTO battles (superheroID,villanFought)
VALUES ('$superheroID','$villan')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
header ("location:battle.php");

$conn->close();
?>
