<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "lks_php22";

$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if($con){
    $setLang = mysqli_query($con, "SET NAMES 'utf8'");
}else{
    die("Ket noi that bai".mysqli_connect_error());
}

?>