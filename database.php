<?php
$host = 'localhost';
$dbname = 'crud';
$user = 'root';
$password = '';

$database = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);