<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $favpeeps=array();




    array_push($favpeeps,"Marc");
    array_push($favpeeps,"Che Guevara");
    array_push($favpeeps,"Pablo Escobar");
    array_push($favpeeps,"Grumpy Cat");
    array_push($favpeeps,"Barry");
    array_push($favpeeps,"Justin Bieber");
    array_push($favpeeps,"andrea pirlo");
    array_push($favpeeps,"Totti");
    array_push($favpeeps,"Al Capone");
    array_push($favpeeps,"DB Cooper");
    array_push($favpeeps,"Andy Pandy");
    array_push($favpeeps,"John Steinbeck");

    sort($favpeeps);

    $randnum=rand(0,count($favpeeps))-1;
    $WINNER=($favpeeps[$randnum]);

    print "The winner of the Specs is ".strtoupper($WINNER);
    unset ($favpeeps[$WINNER]);

    $randnum=rand(0,count($favpeeps))-1;
    $WINNER=($favpeeps[$randnum]);
    print "<br> The Winner of the Sausage rolls is  ".strtoupper($WINNER);
    unset ($favpeeps[$WINNER]);

    $randnum=rand(0,count($favpeeps))-1;
    $WINNER=($favpeeps[$randnum]);
    print "<br> The winner of the mugs is ".strtoupper($WINNER);







    ?>
</p>
</body>
</html>