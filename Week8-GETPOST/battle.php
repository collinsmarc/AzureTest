<?php
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Battle INFO</title>
</head>

<header>
<h1>Battle Portal</h1>
</header>

<body>


<h2>Battle Information Input</h2>

<form id="dropDown" method="post">
    <select>
        <option value="Select">Select Superhero</option>
        <option value="new"><php?$sql="SELECT lastName FROM superheros";

            $result=$db->query($sql);

            while($row=$result->fetch_array()){
            echo "<option value>=".$row['lastName']."

                ?>
        </option>




</form>
</body>
</html>
















</body>

</html>