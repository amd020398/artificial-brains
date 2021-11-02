<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "re";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `data` WHERE 1";

// for method 1

$result= mysqli_query($connect, $query);



// for method 2


?>