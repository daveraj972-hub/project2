<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "weather_app";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

session_start();

?>