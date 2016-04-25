<?
include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bugsDesign.css" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet"
          href="unsemantic-grid-responsive-tablet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,
13 maximum-scale=1"/>

    <title>BugTracker</title>
</head>

<body>
<header>
    <img id="logo" img src="logo.png">

    <h1>Bug Tracker</h1>
    <h2>Keeping track of all the pesky little bugs</h2>

</header>
<br><br>

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
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        ?>
            <form action="addBugs.php" method="post">

                <Label>Bug Name</Label><input type="text" name="bugName" required><br><br>
                <Label>Bug Summary</Label><br><textarea name="summary" cols="30" rows="5" required></textarea><br><br>
                <Label>Bug Category</Label>
                <select name="option">
                    <option value="android">Android</option>
                    <option value="ios">iOS</option>
                    <option value="windows">Windows</option>
                </select><br><br>



                <input type="submit" value="Submit">
            </form>


            <?

        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name=$_POST["bugName"];
        $summary=$_POST["summary"];
        $category=$_POST["option"];



        $sql="INSERT INTO bugs (bugName,BugSummary,BugCategory)
VALUES ('$name','$summary','$category') ";

        if (mysqli_query($db, $sql)) {
            header("Location:showbugs.php");
        }
        } else {

            header("Location:index.php");
        }

        $conn->close();
        ?>








    </section>


</main>
<footer>
    <p>Designed by Marc Collins, 2016</p>


</footer>




</body>
</html>