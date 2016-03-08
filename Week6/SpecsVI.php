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

    print rand(0,11);



    ?>
</p>
</body>
</html>