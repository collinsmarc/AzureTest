<?php
include("connection.php"); //establish connection to DB

//insert into superhero db

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$power=$_POST["power"];




$sql="INSERT INTO superheroes (firstName,lastName,mainSuperpower)
VALUES ('$firstName','$lastName','$power') ";

$result=$db->query($sql);

echo "New Entry";


?>







