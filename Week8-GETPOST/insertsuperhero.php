<?php
include("connection.php"); //establish connection to DB

//insert into superhero db

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$power=$_POST["power"];

echo "{$firstName}, {$lastName}, {$power}";


$sql="INSERT INTO superheros (firstName,lastName,mainSuperpower)
VALUES ('$firstName','$lastName','$power') ";

if (mysqli_query($db, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

$conn->close();
?>






