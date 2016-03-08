<!doctype html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $todaysGood=rand(0,2);

$specs = 7;
$mugs = 7;
$sausagerolls = 7;
//Set the first date of the month
$day = 1;
while(($specs > 0) && (mugs > 0) && ($sausagerolls > 0)) {
    $todaysGood = rand(0,2);
    //specs = 0
    //mugs = 1
    //sausagerolls = 2

    switch ($todaysGood) {
        case 0:
            $specs--;
            echo "On day " . $monthDate . " Specs are available<br>";
            break;
        case 1:
            $mugs--;
            echo "On day " . $monthDate . " Mugs are available<br>";
            break;
        case 2:
            $sausagerolls--;
            echo "On day " . $monthDate . " Sausage Rolls are available<br>";
            break;
    }
    $day++;
}
echo "No more goods are available this month";

//This code should work. I haven't tested it but it looks right. Mike.
?>






</p>
</body>
</html>