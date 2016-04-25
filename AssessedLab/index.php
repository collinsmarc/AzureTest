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

    <aside class="grid-33">
        <nav id="quick links">
            <ul>
                <li><a href="showbugs.php">All Bug Items</a></li>
                <li><a href="showbugs.php?category=android">Android Bugs</a></li>
                <li><a href="showbugs.php?category=ios">iOS Bugs</a></li>
                <li><a href="showbugs.php?category=windows">Windows Bugs</a></li>
                <li><a href="addBugs.php">Insert Bugs</a></li>
            </ul>
        </nav>

    </aside>


    <section class="grid-66">
        <article id="contentHome">
            <p>
                Lorem ipsum dolor sit amet, consectur adipiscing elit. Aenean euismod bibendum laoreet.Proint gravida
                dolor sit amet lacus accumsan
                et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                paturient montes, nascetur ridiculus mus.
                Nam fermentum, nulla luctus phareta vulpate, felis tellus mollis orci, sed rhoncus sapien nunc eget
                odio.

                Lorem ipsum dolor sit amet, consectur adipiscing elit. Aenean euismod bibendum laoreet.Proint gravida
                dolor sit amet lacus accumsan
                et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis
                paturient montes, nascetur ridiculus mus.
                Nam fermentum, nulla luctus phareta vulpate, felis tellus mollis orci, sed rhoncus sapien nunc eget
                odio.
            </p>
        </article>
    </section>



</main>

<div id="fixer"></div>
<footer>
    <p>Designed by Marc Collins, 2016</p>


</footer>


</body>
</html>