<?php
$servername="localhost";
/*The person who made the video didn't include email button, so I don't know what to do to veryfy the email*/
$dBUsername="root";
$dBPassword="";

$conn=mysqli_connect($servername, $dBUsername, $dBPassword);

if (!$conn) {
	die("Connection Failed:" .mysqli_connect_error());
}