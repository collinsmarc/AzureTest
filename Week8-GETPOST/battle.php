<?php
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Battle INFO</title>
</head>
<body>

<?
$sql=mysql_query("SELECT lastName FROM superhero");
if(mysql_num_rows($sql)){
$select= '<select name="select">';
    while($rs=mysql_fetch_array($sql)){
    $select.='<option value="'.$rs['lastName'].'">'.$rs['name'].'</option>';
    }
    }
    $select.='</select>';
echo $select;?>

















</body>

</html>