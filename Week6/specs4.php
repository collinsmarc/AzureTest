<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    for ($i=1;$i<31;$i++){


        echo "on the".$i."of the month you can buy ";

        if (($i%2)==0){
            echo "specs ";
        }if (($i%3)==0){
            echo "mugs ";

        }if (($i%4)==0){
            echo "sausage rolls";
        }
        echo "<br>";

    }

    ?>
</p>
</body>
</html>