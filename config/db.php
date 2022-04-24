<?php

//mysqli or PDO
//PDO can use basically any database
//mysqli is linked to mysql

define('DB_HOST', 'localhost');
define('DB_USER', 'justin');
define('DB_PASS', 'admin');
define('DB_NAME', 'feedbackApp');

//create the connection
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//check connection
if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
}

?>