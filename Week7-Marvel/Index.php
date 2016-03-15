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
    <meta name="viewport"  content="width=device-width,initial-scale=1,minimum-scale=1,
maximum-scale=1"  />
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

<main class="grid-container">

    <div id="fixer"></div>
    <section class="grid-50" id="left">
        <h2> Search here</h2>
        </section>

    <section class="grid-50" id="right">
        <h2> Also search here</h2>
        </section>

    </main>

<footer>
    <p>all rights reserved to the MMDB. Admin Marc</p>
    </footer>




