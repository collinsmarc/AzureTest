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


        <?php
                $query="SELECT lastName FROM superheros";
                 $result=$db->query($sql);
          echo "<select name='dropdown' value=''><option>Choose Superhero</option>";

            while($row=$result->fetch_array()){
            echo "<option value=".$row['lastName'].">"."</option>";}
            echo "</select>";

                ?>







</form>
</body>
</html>
















</body>

</html>