<?php

$username=$_POST["username"];
$password=$_POST["password"];

if ($username=="marc" && $password=="password"){
    setcookie('access_level','standarduser');
    header("Location:Homepage.php");
}
else{
    echo "<p> INCORRECT </p>";

}









?>