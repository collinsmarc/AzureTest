<html>

<head>
    <link rel="stylesheet" type="text/css" href="design.css"/>
</head>

<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><strong><font size="20">GameShare RGU</font></strong></h1>
        </div>
        <div id="search">
            <Form Name ="login" action="login.php" method="post">
                <div id="logintext">
                    <font size="-2"><label for="username">Username :</label><input id="username" name="username" type="text" size="-2"/><label for="Password">Password :</label><input id="password" name="password" type="password" size="-2"/></font><input class="form-submit" type="submit" value="Login" />
                    <a id="register" href="BackUps/Register.html">Not a member? Register.</a>
                </div>
            </form>
        </div>
        <div id="menu">
            <form action="results.php" method="post">
                <ul>
                    <li><a href="index.html">Homepage</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="search.html">Search</a></li>
                    <li><input id="qsearch" name="qsearch" type="text" placeholder="I want to borrow..."/><input id="qsgo" type="submit"  value="Go"></li>
                </ul>
            </form>
            <br class="clearfix" />
        </div>
    </div>
    <div id="page">
        <div id="content">

            <?php

            error_reporting(-1);

            $dsn = "mysql:host=eu-cdbr-azure-north-d.cloudapp.net;dbname=db1510646_gameshare";
            $username = "b52b6c6935c6d2";
            $password = "26ebeed0";
            try {
                $conn = new PDO($dsn, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "";

                $stuno = $_POST['pstuno'];

                $email = $_POST['pemail'];

                $sql = "SELECT password FROM members WHERE studentID = '$stuno' AND email = '$email'";
                $results = $conn->query($sql);

            if ($results->rowcount() == 0) {
                echo "No members were found to match those details.<br />";
            } else {

                $to      =  $email;
                $subject = 'Forgotten Password';
                $message = "You requested an email to remind you of your password to the GameShare service. That password is: '$result'";
                $headers = 'From: webmaster@gameshare.com' . "\r\n" .
                    'Reply-To: webmaster@gameshare.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);
                echo "Please check your email for your password";

            }

            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            $conn = null;
            ?>
        </div>
        <br class="clearfix" />
    </div>
    <div id="footer">
        &copy; 2016. All rights reserved. Design by <strong>GROUP C</strong>.
    </div>
</div>
</body>
</html>