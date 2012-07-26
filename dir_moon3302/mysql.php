<?php
/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=team1GuestDB;host=127.0.0.1';
$user = 'team1GuestDB';
$password = 'team1GuestPass';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?> 

