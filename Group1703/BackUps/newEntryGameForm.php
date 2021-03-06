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
        <div id="search">
            <Form Name="login" action="login.php" method="post">
                <? if (!isset($_SESSION['username'])) {
                    echo '
                    <font size="-2"><label for="username">Username :</label><input id="username" name="username" type="text" size="-2"/><label for="Password">Password :</label><input id="password" name="password" type="password" size="-2"/></font><input class="form-submit" type="submit" value="Login" />
                    <a id="register" href="registerDetails.php">Not a member? Register.</a>
               ';
                } else {
                    echo "Logged in as: " . $_SESSION['username'];
                    echo ' <form name="logout" action="logout.php" method="post">
                            <input id="logoutButton" type="submit" type="submit" value="Log Out">
                            </form>';
                }


                ?>
            </form>
        </div>

        <div id="menu">
            <form action="results.php" method="post">
                <ul>
                    <li><a href="index.html">Homepage</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="Search.php">Search</a></li>
                    <li><input id="qsearch" name="qsearch" type="text" placeholder="I want to borrow..."/><input
                            id="qsgo" type="submit" value="Go"></li>
                </ul>
            </form>
            <br class="clearfix"/>
        </div>
    </div>
    <div id="page">
        <div id="content">

            <main>
                <table style="width:300px">
                    <form name="AddNew" Method="post" action="newEntryGameSQL.php">
                        <tr>
                            <td><label for="title">Title :</label></td>
                            <td><input id="title" name="title" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label for="year"> Year :</label></td>
                            <td><select name='year'>
                                    <option value="%">Select one</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label for="genre">Genre :</label></td>
                            <td><input type="radio" name="genre" value="action"> Action<br>
                                <input type="radio" name="genre" value="adventure"> Adventure <br>
                                <input type="radio" name="genre" value="strategy"> Strategy<br>
                                <input type="radio" name="genre" value="rpg"> RPG<br>
                                <input type="radio" name="genre" value="sports"> Sports<br>
                                <input type="radio" name="genre" value="horror"> Horror <br>
                                <input type="radio" name="genre" value="simulation"> Simulation <br>
                                <input type="radio" name="genre" value="fps"> FPS <br>
                                <input type="radio" name="genre" value="hack n slash"> Hack n Slash <br>
                                <input type="radio" name="genre" value="music"> Music <br>
                                <input type="radio" name="genre" value="racing"> Racing <br>
                                <input type="radio" name="genre" value="party"> Party <br>
                                <input type="radio" name="genre" value="online"> Online <br>

                        </tr>
                        <tr>
                            <td><label for="platform">Platform :</label></td>
                            <td><select name='platform'>
                                    <option value="%">Select one</option>
                                    <option value="XBOX360">Xbox 360</option>
                                    <option value="XBOXONE">Xbox One</option>
                                    <option value="ps3">PS3</option>
                                    <option value="ps4">PS4</option>
                                    <option value="wii">Wii</option>
                                    <option value="Wii U">Wii U</option>
                                </select></td>

                        </tr>
                        <tr>
                            <td><label for="age">Age Rating :</label></td>
                            <td><input id="desc" name="desc" type="text"/></td>
                        </tr>


                        <tr>
                            <td><label for="desc">Brief Description :</label></td>
                            <td><input id="desc" name="desc" type="text"/></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Add Game">
                        </tr>
                        </td>

                    </form>
                </table>
                
                
                
                
                


            </main>

        </div>
    </div>
</div>
<br class="clearfix"/>

<div id="footer">
    &copy; 2016. All rights reserved. Design by <strong>GROUP C</strong>.
</div>
</div>
</body>


