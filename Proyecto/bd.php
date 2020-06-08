<?php



$server = 'localhost:1433';
$username = 'PERALTROX';
$password = 'julio798';
$database = 'usuarios';

try {
  $conn = new PDO("sqlserver:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
} 

?>