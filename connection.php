<!-- 
  Author: Piera Blum
  Date: 21.10.2024
  Description: This is a PHP script for the database connection.
 -->
<?php 

$dsn = 'mysql:dbname=userdb;host=localhost';
$username = 'root';
$password = '';

$con = new PDO($dsn, $username, $password);
?>