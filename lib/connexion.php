<?php

// DSN :
$host = 'localhost';
$db = 'boutique';
$username = 'boutique';
$password = 'Qx6gNqfFT90CVk3q';
$charset = 'utf8mb4';
$port = '3306'; 

$dsn = "mysql:host=$host;dbname=$db;port=$port;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

$pdo = new PDO($dsn, $username, $password, $opt);

