<?php
include("connection.php"); //establish connection to DB

if (empty($_POST['username']) || empty ($_POST['password'])){
    echo "Both fields are required";

}else{
    $username=$_POST['username'];
    $password=$_POST['password'];
}

$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";

$result=mysqli_query($db,$sql);



if (mysqli_num_rows($result)==1){
    header("location:home.php?username=".$username);//redirect to home page

}else{
    echo "Incorrect username of password";
}

?>
