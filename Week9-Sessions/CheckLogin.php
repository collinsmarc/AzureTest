
<?php
session_start();


$username=$_POST["username"];
$password=$_POST["password"];


$_SESSION['username']=$username;
$_SESSION['password']=$password;

if (isset($_SESSION['username'])){
    set_session('access_level','standarduser');
    header("Location:Homepage.php");
}
elseif(!isset($_SESSION['username'])){
    echo "<p> INCORRECT </p>";

}









?>