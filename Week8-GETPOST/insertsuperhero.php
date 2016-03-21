<?php
include("connection.php"); //establish connection to DB

//insert into superhero db

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$power=$_POST["power"];




$sql="INSERT INTO superheroes (firstName,lastName,mainSuperpower)
VALUES ('$firstName','$lastName','$power') ";

$result=$db->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






