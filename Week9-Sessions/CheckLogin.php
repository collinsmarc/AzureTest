
<?php
session_start();


$_SESSION['username']=$_POST["username"];
$_SESSION['password']=$_POST["password"];

if (isset($_SESSION['username'])){
    set_session('access_level','standarduser');
    header("Location:Homepage.php");
}
elseif(!isset($_SESSION['username'])){
    echo "<p> INCORRECT </p>";

}









?>