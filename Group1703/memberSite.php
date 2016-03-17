<?php session_start(); ?>

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
        <form name="logout" action="logout.php" method="post">
            <input type="submit" type="submit" value="logout">
        </form>






<div id="menu">
    <form action="results.php" method="post">
        <ul>
            <li><a href="index.html">Homepage</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="search.html">Search</a></li>
            <li><input id="qsearch" name="qsearch" type="text" placeholder="I want to borrow..."/><input id="qsgo"
                                                                                                         type="submit"
                                                                                                         value="Go">
            </li>
        </ul>
    </form>
    <br class="clearfix"/>
</div>
</div>
</div>
</body>





        </main>