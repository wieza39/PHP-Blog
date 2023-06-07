<?php
$host = 'localhost'; 
$username = 'root'; 
$password = '';
$database = 'wprg';

$connection = mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "\ndatabase connected \n";
}

define('DB_CONNECTION', $connection);

?>
