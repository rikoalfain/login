<?php
$hostname   = 'pdo';
$dbname     = 'crud';
$username   = 'root';
$password   = '';
try {
    $pdo = new PDO("mysql:hostname={$hostname};dbname={$dbname}", $username, $password);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
