<?php
include("connection.php"); //establish connection to DB
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> MARVEL SEARCH</title>
    <link rel="stylesheet" href="StyleMarvel.css" type="text/css"/>
    <link rel="stylesheet"
          href="unsemantic-grid-responsive-tablet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,
maximum-scale=1"/>
</head>

<header>
    <img id="marvel" img src="marvel_logo.jpg" width="300px">
    <h1>The Marvel Database<h1>
            <h2>Here to meet all your nerdy needs</h2>
            <nav id="quicklinks">
                <ul>

                    <li><a href="index.php">Home Page</a></li>
                    <li><a href="allMovies.php">All Movies</a></li>
                    <li><a href="allMarvel.php">All Marvel Movies</a></li>
                    <li><a href="2010After.php">After 2010</a></li>
                    <li><a href="Xmen.php">All X-Men </a></li>
                </ul>
</header>

<main>
    <div id="fixer"></div>


    <?php
    $sql = "SELECT * FROM marvelmovies WHERE yearReleased>2010";
    $result = mysqli_query($db, $sql);

    while ($row = $result->fetch_array()) {
        $movieTitle = $row['title'];
        print "<table id='results'>\n";
        echo "<th>MarvelID</th><th>Year</th><th>Title</th><th>Studio</th><th id='desc'>Notes</th>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row["marvelMovieID"] . "</td>";
            echo "<td>" . $row["yearReleased"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["productionStudio"] . "</td>";
            echo "<td>" . $row["notes"] . "</td>";

        }
    }


    ?>


</main>


<footer>
    <p>all rights reserved to the MMDB. Admin Marc</p>
</footer>
