<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    function wantedPerson($name,$noSpecs,$noMugs,$noSausageRolls){

        $reward=10*(($noSpecs*$noMugs*$noSausageRolls)*($noSpecs*$noMugs*$noSausageRolls))/2;

        echo "Wanted :".$name
            ."<br> Known to be in possesion of the following items: "
            ."<br> Specs ".$noSpecs
            ."<br> Mugs ".$noMugs
            ."<br> Sausage Rolls ".$noSausageRolls
            ."<br> Award for capture: ".$reward
            ."<br> <br> <br>";
    }

    wantedPerson("Marc",2,3,4);
    wantedPerson("David",10,20,40);
    wantedPerson("Petey",1,1,1);
    ?>
</p>
</body>
</html>