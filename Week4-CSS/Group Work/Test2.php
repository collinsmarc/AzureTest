 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<p>
<h1>RESULTS</h1>

<?php


$db = new mysqli(
    "csdm-webdev.rgu.ac.uk",
    "1510646",
    "1510646",
    "db1510646_gameshare"
);

//test if connection was established, and print any errors


  if (!$db) {
    die('Connect Error: ' . mysql_error());
}

$sql="SELECT * FROM 'game collection'";

$result=mysql_query($sql);

while ($row=mysql_fetch_array($result)){

//print_r ($row);
echo $row['Title'];
echo $row ['Year'];
?>




</body>
</html>