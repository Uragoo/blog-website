<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'ghiblog';

$connection = new mysqli($hostname, $username, $password,$db_name);

if ($connection->connect_error) {
    die('Database connection error : '. $connection->connect_error);
}