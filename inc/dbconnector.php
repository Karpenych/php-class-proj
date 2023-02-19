<?php

$host = 'localhost';
$user = 'root';
$pass = 'usbw';
$dbname = 'dbcinema';


try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8", $user, $pass);
}
catch(PDOException $e) {
    echo $e->getMessage();
}



?>
