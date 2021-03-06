<? session_start();
if (!isset($_SESSION['username'])) {
    header("Location:home.php");
} ?>

<!DOCTYPE html>


<head>
    <link rel="stylesheet" type="text/css" href="design.css"/>
    <link rel="stylesheet"
          href=unsemantic-grid-responsive-tablet.css">
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
                    <li><a href="home.php">Homepage</a></li>
                    <li><a href="memberSite.php">Profile</a></li>
                    <li><a href="forum.php">Forum</a></li>
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


            <main class="grid container">
                <section class="grid-50" section id="content1">
                    <article id="welcome">
                        <h2>Welcome Back <? echo $_SESSION['username']; ?></h2>
                        <h3>What would you like to do today?</h3>

                        <p><a href="#">Change Password</a></p>
                        <form name="logout" action="logout.php" method="post">
                            <input id="logoutButton" type="submit" type="submit" value="Log Out">
                        </form>
                    </article>
                </section>


                <section class="grid-30"  id="content2">
                    <h3>Your Titles</h3>
                    <?php


                    error_reporting(-1);

                    $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
                    $username = "b52b6c6935c6d2";
                    $password = "26ebeed0";
                    try {
                        $conn = new PDO($dsn, $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }

                    $user = $_SESSION['username'];



          $sql = "SELECT * FROM owns
        INNER JOIN gamecollection
        ON owns.gameID = gamecollection.GameID
        WHERE owns.studentID = '" . $user ."'";


                    try {
                        $results = $conn->query($sql);

                        if ($results->rowcount() == 0) {
                            echo "no games added <br />";
                        } else {



                                print "<table id='results'>\n";
                                echo "<th>GameID</th><th>Game</th><th>Condition</th><th>Copy ID</th><th>Loan Status</th><th>Options</th>";
                                foreach ($results as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row["GameID"] . "</td>";
                                    echo "<td>" . $row["Title"] . "</td>";
                                    echo "<td>" . $row["game_condition"] . "</td>";
                                    echo "<td>" . $row["copyID"] . "</td>";
                                    echo "<td>" . $row["status"] . "</td>";
                                    echo "<td>
                                    <form id='Delete' action='DeleteCopy.php?copyID= method='post'>
                                        <button id='Delete' name='Delete' value='".$row['copyID']."'>Delete</button></form>
                                    <form id='Update Status' action='UpdateStatus.php?copyID= method='post'>
                                        <button id='UStatus' name='UStatus' value='".$row['copyID']."'>Update Status</button></form>
                                    <form id='Update Condition' action='UpdateCondition.php?copyID= method='post'>
                                        <button id='UCondition' name='UCondition' value='".$row['copyID']."'>Update Condition</button></form>
                                    </td>";


                                }
                               print "</table>\n";


                            }
                        }
                     catch (PDOException $e) {
                        echo "Query failed: " . $e->getMessage();
                    }
                    $conn = null;

                    ?>
                    <br><br>
                    <a href="addTitlePlatform.php">Add Title</a>
                    <br><br><br><br><br><br>
                    <h3>Your Loans</h3>
                    <a href="memberLoans.php">Borrows</a>
                    <a href="memberLends.php">Lends</a>

                </section>
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





