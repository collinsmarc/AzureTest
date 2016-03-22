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

<form action="insertBattle.php" form id="dropDown" method="post">

  <p>Who Fought in this Battle?</p>
    <select name="superhero">
        <?php
                $query="SELECT * FROM superheros";
                 $result=$db->query($query);
                while($row=$result->fetch_array()) {
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $id = $row['superheroID'];

                    echo "<option value='{$id}'>{$firstName}."-".{$lastName}</option>";
                }



                ?>

    </select>





</form>
</body>
</html>
















</body>

</html>