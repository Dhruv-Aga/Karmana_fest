<?php

$servername = '10.0.0.47';
$username = 'kiet';
$password = 'S*0V$Gt';
$dbname="karmana";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
	echo("Hi");
    die("Connection failed: " . $conn->connect_error);
}
	?>