<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
   $wantedgood=mugs;

    switch($wantedgood){
        case "mugs": echo "you must be 18 to buy mugs";
                     break;

        case "specs": echo "you must be 16 or over to buy specs";
            break;

        case "sausage rolls": echo "you must be 21 or over to buy sausage rolls";
            break;
    }




    ?>
</p>
</body>
</html>