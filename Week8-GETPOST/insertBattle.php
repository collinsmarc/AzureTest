<?php
include("connection.php"); //establish connection to DB

//insert into battle db

$superheroID=$_POST["superhero"];
$vil=$_POST["villan"];




$sql="INSERT INTO battles (superheroID,villanFought)
VALUES ('$superheroID','$vil')";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}


$conn->close();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Insert</title>
</head>



<main>
<input type="submit" form action="battle.php">
</main>
</html>