<?php
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Battle INFO</title>
</head>
<h1>Battle Portal</h1>

<body>


<h1>Battle Information Input</h1>

<form id="dropDown" method="post">
    <select>
        <option value="Select">Select Superhero</option>
        <option value="new"><?$sql="SELECT lastName FROM superheros";

            $result=$db->query($sql);

            while($row=$result->fetch_array()){
            echo "<p>".$_POST['lastName'];

                }?>
        </option>




</form>















</body>

</html>