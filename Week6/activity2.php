<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
   $myage=17;
    $myname="marc";

   if ($myage>=16) {
       print "You can  buy specs" . $myname;


   }else if ($myage>=18){
       print "You can  buy mugs" . $myname;


   } else if ($myage>=21){
       print "You can  buy sausage rolls" . $myname;
   }



    ?>
</p>
</body>
</html>