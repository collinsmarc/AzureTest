<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $todaysGood=rand(0,2);

    while($todaysGood<=7){
        for ($i = 1; $i < 31; $i++) {


            echo "on the" . $i . "of the month you can buy ";

            if (($i % 2) == 0) {
                echo "specs ";
            }
            if (($i % 3) == 0) {
                echo "mugs ";

            }
            if (($i % 4) == 0) {
                echo "sausage rolls";
            } else
                echo "nothing!";

            echo "<br>";

        }
    }





      echo "<br> no more goods available";
    ?>
</p>
</body>
</html>