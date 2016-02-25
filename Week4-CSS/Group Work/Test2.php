 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<p>
<h1>RESULTS</h1>

<?php
error_reporting(-1);

echo "in PHP";
$db = new mysqli(
    "eu-cdbr-azure-north-d.cloudapp.net",
    "b52b6c6935c6d2",
    "26ebeed0",
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
echo $row ['Year'];}
?>




</body>
</html>