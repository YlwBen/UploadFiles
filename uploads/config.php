<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "BDDWeTransfert";

error_reporting(E_ALL);
define( “DB_DSN”, “mysql:host=$servername;dbname=$dbname );
define( “DB_USERNAME”, $username );
define( “DB_PASSWORD”, $password );
?>
