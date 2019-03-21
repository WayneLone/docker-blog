<?php
$db_type = 'mysql';
$host = 'mydb';
$db_port = '3306';
$db_name = 'blog';
$user = 'blog';
$passwd = 'blog123.';
$dsn = "$db_type:host=$host;port=$db_port;dbname=$db_name";
try {
    $db_pdo = new PDO($dsn, $user, $passwd);
    echo 'successful<br/>';
} catch (PDOException $e) {
    die('Error!: '. $e->getMessage() . '<br/>');
}