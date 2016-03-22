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



  <p>Who Fought in this Battle?</p>

<form action="insertBattle.php"  method="post">
    <select name="superhero">
        <?php
                $query="SELECT * FROM superheros";
                 $result=$db->query($query);
                while($row=$result->fetch_array()) {
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $id = $row['superheroID'];

                    echo "<option value='{$id}'>{$firstName} {$lastName}</option>";
                }



                ?>

    </select>

    <p> Which Villan was Fought</p>

        <input type="text" name="villan" placeholder="Villan Fought">
        <br><br>
        <input type="submit" value="Log Battle">






</form>
</body>
</html>
















</body>

</html>