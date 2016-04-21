<? session_start();
if (!isset($_SESSION['username'])) {
    header("Location:index.html");
} ?>

<!DOCTYPE html>


<head>
    <link rel="stylesheet" type="text/css" href="design.css"/>
    <link rel="stylesheet"
          href="unsemantic-grid-responsive-tablet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
</head>


<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><strong><font size="20">GameShare RGU</font></strong></h1>
        </div>


        <div id="menu">
            <form action="results.php" method="post">
                <ul>
                    <li><a href="index.html">Homepage</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="Search.php">Search</a></li>
                    <li><input id="qsearch" name="qsearch" type="text" placeholder="I want to borrow..."/><input
                            id="qsgo"
                            type="submit"
                            value="Go">
                    </li>
                </ul>
            </form>
            <br class="clearfix"/>
        </div>
    </div>
    <div id="page">
        <div id="content">


            <main>


                <h3> Are you sure you wish to add your copy? <h3>
                    <br>
                    <form name="confirm" method="post">
                   <input type="text" id="conditionConfirm" placeholder="Condition of your copy" >
                        <br>
                    <input type="submit" value="Confirm">

                </form>

                    <?error_reporting(-1);

                    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
                    $username = "b52b6c6935c6d2";
                    $password = "26ebeed0";
                    try {
                        $conn = new PDO($dsn, $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $sql = "";
                        $query = "";

                        $id=$_SESSION['username'];
                        $condition=$_POST['conditionConfirm'];
                        $gameID=$_POST['Titles'];





                        $query = "INSERT INTO owns (gameID, studentID, game_condition) VALUES ('$gameID','$id','$condition')";



                        $conn->exec($query);

                        header("Location:memberSite.php");


                    } catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }

                    $conn = null;
                    ?>







            </main>

        </div>
        <br class="clearfix"/>
    </div>
    <div id="footer">
        &copy; 2016. All rights reserved. Design by <strong>GROUP C</strong>.
    </div>
</div>
</body>
</html>





