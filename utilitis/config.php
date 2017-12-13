<?php
    @session_start();
	$dbname ="webtech";
	$dbusername ="root";
	$password ="";
	$host = "localhost";
	$conn = mysqli_connect($host,$dbusername,$password,$dbname)
?>