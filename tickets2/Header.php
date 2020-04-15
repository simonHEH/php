<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <meta name="description" content="This is an example of a meta description. this will often show up in seach results">
    <meta name="vieuwport" content="width=device-with, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>

<ul id="HeaderUL">
    <li><a href="Home.php">Home</a></li>
    <li><a href="profiel.php">profiel</a></li>
</ul>


<div>
     <form action="regristreren.php" method="post" id="login">
         <button type="submit" name="uitloggen">registreren</button>
     </form>
     <form action="regristreren.php" method="post" id="login">
        <button type="submit" name="inloggen">login</button>
    </form>
</div>
</header>
</body>
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "festivalupdate");

function db_connect(){
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
return $connection;
}

function db_disconnect($connection){
if (isset($connection)) {
mysqli_close($connection);
}
}
$db = db_connect();
$db;
?>