<!DOCTYPE html>
<html>
<head>
    <title>selfreference</title>
</head>
<body>
<h1>TESSSSSST</h1>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>

<h1>Form Test</h1>
<form action="<?{$_SERVER['PHP_SELF'];}?>" method="post">
    Title: <input type="text" name="title">
    <br>
    Content: <input type="text" name="content">
    <br>
    Category: <input type="radio" name="animal" value="cat">Cat
    <input type="radio" name="animal" value="dog">Dog
    <input type="radio" name="animal" value="misc">Misc
    <br><br>
    <input type="submit" value="Submit">


    <?

}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title=$_POST["title"];
    $content=$_POST["content"];
    $animal=$_POST["animal"];

    echo "<article>
<h1>{$title}</h1><br>
<p>{$content}</p><br>
<strong>{$animal}</strong><br>




<article>";



}
else {

}
?>
</body>
</html>