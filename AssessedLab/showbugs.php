<?
include("connection.php");
$choice = $_GET["category"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bugsDesign.css" type="text/css"/>
    <link rel="stylesheet"
          href="unsemantic-grid-responsive-tablet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,
13 maximum-scale=1"/>

    <title>BugTracker</title>
</head>

<body>
<header>
    <img class="grid-30" id="logo" img src="logo.png" width="100px">
    <?
    switch ($choice) {
        case "android":
            echo "<h1>Bug Tracker - Android Exclusive</h1>
    <h2>Keeping track of all the pesky little bugs</h2>";
            break;
        case "ios":
            echo "<h1>Bug Tracker - IOS Exclusive</h1>
    <h2>Keeping track of all the pesky little bugs</h2>";
            break;
        case "windows":
            echo "<h1>Bug Tracker - WINDOWS Exclusive</h1>
    <h2>Keeping track of all the pesky little bugs</h2>";
            break;


        default:
            echo "<h1>Bug Tracker</h1>
    <h2>Keeping track of all the pesky little bugs</h2>";
    }
    ?>


</header>
<br><br><br>

<main class="grid-container">
    <aside class="grid-30">
        <nav id="quick links">
            <ul>
                <li><a href="showbugs.php">All Bug Items</a></li>
                <li><a href="showbugs.php?category=android">Android Bugs</a></li>
                <li><a href="showbugs.php?category=ios">iOS Bugs</a></li>
                <li><a href="showbugs.php?category=windows">Windows Bugs</a></li>
                <li><a href="addBugs.php">Insert Bugs</a></li>
        </nav>
    </aside>

    <section class="grid-70">
        <article id="show">
            <?php

            switch ($choice) {
                case "android":
                    $sql = "SELECT * FROM bugs WHERE BugCategory LIKE '$choice'";
                    $result = mysqli_query($db, $sql);

                    while ($row = $result->fetch_array()) {

                        foreach ($result as $row) {
                            echo "<h2>" . $row["bugName"];
                            echo "<br>";
                            echo "<p>" . $row["BugCategory"] . "<p>";
                            echo "<br>";
                            echo "<p>" . $row["BugSummary"] . "</p>";
                            echo "<br><br>";
                            echo "----------------------------------------------------------";
                            break;
                        }
                    }


                case "ios":
                    $sql = "SELECT * FROM bugs WHERE BugCategory LIKE '$choice'";
                    $result = mysqli_query($db, $sql);

                    while ($row = $result->fetch_array()) {

                        foreach ($result as $row) {
                            echo "<h2>" . $row["bugName"];
                            echo "<br>";
                            echo "<p>" . $row["BugCategory"] . "<p>";
                            echo "<br>";
                            echo "<p>" . $row["BugSummary"] . "</p>";
                            echo "<br><br>";
                            echo "----------------------------------------------------------";
                            break;
                        }
                    }


                case "windows":
                    $sql = "SELECT * FROM bugs WHERE BugCategory LIKE '$choice'";
                    $result = mysqli_query($db, $sql);

                    while ($row = $result->fetch_array()) {

                        foreach ($result as $row) {
                            echo "<h2>" . $row["bugName"];
                            echo "<br>";
                            echo "<p>" . $row["BugCategory"] . "<p>";
                            echo "<br>";
                            echo "<p>" . $row["BugSummary"] . "</p>";
                            echo "<br><br>";
                            echo "----------------------------------------------------------";
                            break;
                        }
                    }


                default:
                    $sql = "SELECT * FROM bugs WHERE BugCategory";
                    $result = mysqli_query($db, $sql);

                    while ($row = $result->fetch_array()) {

                        foreach ($result as $row) {
                            echo "<h2>" . $row["bugName"];
                            echo "<br>";
                            echo "<p>" . $row["BugCategory"] . "<p>";
                            echo "<br>";
                            echo "<p>" . $row["BugSummary"] . "</p>";
                            echo "<br><br>";
                            echo "----------------------------------------------------------";
                            break;
                        }
                    }
            }
            ?>















        </article>
    </section>


</main>
<footer>
    <p>Designed by Marc Collins, 2016</p>


</footer>


</body>
</html>