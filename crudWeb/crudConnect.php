<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cruddatabase";

//$conn = mysqli_connnect($servername, $username, $password, $dbname);

$myconnection = new mysqli('localhost','root','','cruddatabase');


if(!$myconnection) {
    die("Connection Failed" . mysqli_connect_error()); 
}
//echo "Connected Succesfully";

?>