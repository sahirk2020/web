<?php
// localhost database credentials

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

//  live database credentials 

// $hostname = "localhost";

// $username = "u521557365_6boulevard";

// $password = '2|K$hn~V';

// $database = "u521557365_6boulevard";

$conn = new mysqli($hostname, $username, $password, $database);

// print_r($conn->connect_error);

if ($conn->connect_error) {
    die("DB Connection failed:" . $conn->connect_error);
}
