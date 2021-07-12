<?php 

$serverName = "localhost";
$dBUserame = "albinajo_dvsdevious";
$dBPassword = "firstwebsite@123";
$dBName = "albinajo_registeredusers";

$conn = mysqli_connect($serverName, $dBUserame, $dBPassword, $dBName);

if (!$conn) {
die("Connection failed" .mysqli_connect_error());
}





