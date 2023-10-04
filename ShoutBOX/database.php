<?php

$servername = "localhost";
$username ="damirz";
$password ="hehexd123";
$dbName = "shoutit";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

