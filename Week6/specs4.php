<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    for ($i=0;$i<30;$i++){


        echo "on the".$i."of the month you can buy ";

        if (($i%2)==0){
            echo "specs <br>";
        }if (($i%3)==0){
            echo "mugs <br>";

        }if (($i%4)==0){
            echo "sausage rolls<br>";
        }

    }


    ?>
</p>
</body>
</html>