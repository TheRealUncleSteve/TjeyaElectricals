<?php
//connecting to database
$server="localhost";
$username="Muzi";
$psswrd="14053";
$dbName="tjeyaelectrical";

$dbConn=mysqli_connect($server,$username,$psswrd,$dbName);
define('ROOT_URL', "http://{$_SERVER['SERVER_NAME']}/");
?>