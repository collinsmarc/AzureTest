<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
   $provisionedActivites=array("specs","mugs","rock and roll");

    $provisionedActivites[1]="hugs";
    unset($provisionedActivites[2]);

    foreach($provisionedActivites as $x){
        print "<p>$x</p>";
    }

    ?>
</p>
</body>
</html>