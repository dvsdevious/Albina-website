<?php 

$serverName = "localhost:3306";
$dBUserame = "cpses_al6k77axng";
$dBPassword = "firstwebsite@123";
$dBName = "albinajo_registeredusers";

$conn = mysqli_connect($serverName, $dBUserame, $dBPassword, $dBName);

if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}


?>


 

