<?php

$access_level=$_COOKIE["access_level"];

function displayAccessLevelInformation($access_level)
{
    if ($access_level == "standarduser") {
        echo "<p> You are currently logged in as Standard User</p>";
    } elseif ($access_level == "root") {
        echo "<p> You are logged in as root</p>";
        echo "<p> You now have access to admin features</p>";
    }
}

displayAccessLevelInformation($access_level);

?>

