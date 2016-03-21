<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Planets</title>
    </head>

<a href="http://marcwebs.azurewebsites.net/Week8-GETPOST/helloPrinter.php?planet=Earth"></a>
<a href="http://marcwebs.azurewebsites.net/Week8-GETPOST/helloPrinter.php?planet=Mars"></a>
<a href="http://marcwebs.azurewebsites.net/Week8-GETPOST/helloPrinter.php?planet=Uranus"></a>

<p>Where would you like to say hello?</p>

<?php
 $planet=$_GET["planet"];
echo "$planet <br>";
?>


</html>