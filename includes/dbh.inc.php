<? php

$serverName = "sql206.epizy.com";
$dBUsername = "epiz_31924393";
$dBPassword = "igNFipJlWtbGN";
$dBName = "epiz_31924393_wolfmember";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}