<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user2";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
