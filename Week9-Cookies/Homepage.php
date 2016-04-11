<?php


function displayAccessLevelInformation($accesslevel)
{
    if ($accesslevel == "standarduser") {
        echo "<p> You are currently logged in as Standard User</p>";
    } elseif ($accesslevel == "root") {
        echo "<p> Youa are logged in as root</p>";
        echo "<p> You now have access to admin features</p>";
    }
}

