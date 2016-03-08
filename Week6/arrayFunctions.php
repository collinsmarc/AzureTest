<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $favbands=array();
    array_push($favbands,"smashing pumpkins");
    array_push($favbands,"pearl jam");
    array_push($favbands,"U2");

    print count($favbands);

    print "<br>".$favbands[1];

    ?>
</p>
</body>
</html>