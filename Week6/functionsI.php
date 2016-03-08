<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $myname="Marc Collins";
    $length=strlen($myname);
    print $length; "<br>";

    $partial=substr($myname,0,2);
    print $partial;"<br>";

    $upper=strtoupper($myname);
    print $upper;"<br>;"


    ?>
</p>
</body>
</html>