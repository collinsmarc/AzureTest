<?php


function displayAccessLevelInformation($access_level)
{
    if ($access_level == "standarduser") {
        echo "<p> You are currently logged in as Standard User</p>";
    } elseif ($access_level == "root") {
        echo "<p> Youa are logged in as root</p>";
        echo "<p> You now have access to admin features</p>";
    }
}

?>

