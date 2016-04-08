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
                <h3> Are you sure you wish to add your copy of <? echo $_POST['title']?> <h3>






                    <form id="borrow">
                    <input type="submit" value="Confirm">

                </form>
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





