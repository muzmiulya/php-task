<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$dbname = 'db_toko';

$con = new mysqli($host, $user, $pass, $dbname);

if ($con->connect_error) {
    echo "Failed connected to database " . $con->connect_error;
    die();
}
