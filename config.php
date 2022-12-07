<?php

$host = "localhost";
$username = "root";
$password = "root";
$database = "db_pweb_10";

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

if (!$pdo) {
    die("Failed to connect with database.");
}
