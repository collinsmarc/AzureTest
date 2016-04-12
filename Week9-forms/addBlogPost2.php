<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>TESSSSSST</h1>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>

<h1>Form Test</h1>
<form action="<?{$_SERVER['PHP_SELF'];}?>" method="post">
    Forename: <input type="text" name="name">
    <br>
    Surname: <input type="text" name="lastname">
    <br>
    <br>
    <input type="submit" value="Submit">


    <?

}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];


    echo "<article>
<h1>WELCOME BACK {$name}{$lastname}</h1>




<article>";



}
else {

}
?>
</body>
</html>