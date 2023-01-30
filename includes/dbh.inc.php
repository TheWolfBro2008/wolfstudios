<? php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "epiz_31924393_wolfmember";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}