<?php
include("connection.php"); //establish connection to DB

//insert into superhero db

$firstname=$_POST["firstName"];
$lastName=$_POST["lastName"];
$power=$_POST["power"];




$sql="INSERT INTO superheroes ('firstName','lastName','mainSuperpower')
VALUES ($firstname,$lastName,$power) ";

?>







