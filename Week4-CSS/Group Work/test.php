<?php
/**
 * Created by PhpStorm.
 * User: 1510646
 * Date: 25/02/2016
 * Time: 11:30
 */



$db = new mysqli(
    "CSDM-WEBDEV",
    "1510646",
    "1510646",
    "db1510646_gameshare"
);

// test if connection was established, and print any errors

if (!$db) {
    die('Connect Error: ' . mysql_error());
}

$sql="SELECT * FROM game collection WHERE Year=2010";

$result=mysql_query($sql);

while ($row=mysql_fetch_array($result)){

    print_r ($row);
    echo $row['Title'];
    echo $row ['Year'];}

?>