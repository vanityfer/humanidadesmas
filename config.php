<?php
define('USER', 'c2540454_fer');
define('PASSWORD', '21begiKAwi');
define('HOST', 'localhost');
define('DATABASE', 'c2540454_fer');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>