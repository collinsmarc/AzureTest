<?
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bugsDesign.css" type="text/css"/>
    <link rel="stylesheet"
          href="unsemantic-grid-responsive-tablet.css">
    <meta name="viewport"  content="width=device-width,initial-scale=1,minimum-scale=1,
13 maximum-scale=1"  />

    <title>BugTracker</title>
</head>

<body>
<header>
    <img class="grid-30" id="logo" img src="logo.png" width="100px">
    <h1>Bug Tracker</h1>
    <h2>Keeping track of all the pesky little bugs</h2>



</header>
<br><br><br>

<main class="grid-container">
    <aside class="grid-30">
        <nav id="quick links">
            <ul>
                <li><a href="showbugs.php">All Bug Items</a></li>
                <li><a href="#">Android Bugs</a></li>
                <li><a href="#">iOS Bugs</a></li>
                <li><a href="#">Windows Bugs</a></li>
                <li><a href="addBugs.php">Insert Bugs</a></li>
            </ul>
        </nav>
    </aside>

    <section class="grid-70">
        <article id="show">
            <?php
            $sql = "SELECT * FROM bugs";
            $result = mysqli_query($db, $sql);

            while ($row = $result->fetch_array()) {

                foreach ($result as $row) {
                    echo "<h2>".$row["bugName"];
                    echo "<br>";
                    echo "<p>" . $row["BugCategory"] . "<p>";
                    echo "<br>";
                    echo "<p>" . $row["BugSummary"] . "</p>";


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