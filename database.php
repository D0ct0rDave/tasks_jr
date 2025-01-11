<?php
include_once('fix_mysql.inc.php');

$database = new database_connection;

// set to your database server's name/IP address
$database->server = "localhost";

// set to the name of your database
$database->database_name = "tasks_jr";

// set to the name of the table you are using
$database->table_name = "tasks";

// set to your database user name
$database->username = "root";

// set to your database user password
$database->password = "root";

$database->connect();
?>