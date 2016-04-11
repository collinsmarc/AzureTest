<?php

session_start();

$username=$_POST["username"];
$password=$_POST["password"];

$_SESSION['password']=$password;
$_SESSION['username']=$username;

if (isset($_SESSION['username'])){
    set_session('access_level','standarduser');
    header("Location:Homepage.php");
}
else{
    echo "<p> INCORRECT </p>";

}









?>