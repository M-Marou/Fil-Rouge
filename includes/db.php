<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'myportfolio';

$connection = new mysqli($host, $user, $pass, $db_name);

if ($connection->connect_error) {
    die('Database connection error: ' . $conn->connect_error );
} 