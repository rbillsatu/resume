<?php

// database on localhost:
// define('DB_HOST', 'localhost');
// define('DB_USER', 'Ryan');
// define('DB_PASS', '123456');
// define('DB_NAME', 'resume');



// database on freehostia.com:
define('DB_HOST', 'mysql.freehostia.com');
define('DB_USER', 'ryabil6_jarvis');
define('DB_PASS', 'Redb0ne11!!');
define('DB_NAME', 'ryabil6_jarvis');

// Create connection:
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection:
if($conn->connect_error){
    die('Connection Failed'.
    $conn->connect_error);
}

// echo 'Database Connected';
?>