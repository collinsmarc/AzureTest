<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $myname="Marc Collins";
    $length=strlen($myname);
    print $length;

    $partial=substr($myname,0,2);
    print $partial;

    $upper=strtoupper($myname);
    print $upper;
    "<br><br>";


   $round=round(M_PI);
    print "<br>".$round;



    $round4=round(M_PI,4);
    print "<br>".$round4;



    ?>
</p>
</body>
</html>