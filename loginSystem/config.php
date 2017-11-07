<?php

$dbuser = "root";
$dbPass = "";
$dbDatabase = "test";
$dbHost = "localhost";

$dbConn = mysqli_connect($dbHost, $dbuser, $dbPass);

if ($dbConn){
    mysqli_select_db($dbConn, $dbDatabase);
    print("<strong>Successfully connected to the database!</strong></br>");
}else{
    die("<strong>Error</strong> Could not connect to the database.");
}
?>
