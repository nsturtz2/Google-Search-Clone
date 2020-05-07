<?php
ob_start();

try {
    $con = new PDO("mysql:dbname=search;host:localhost", "newuser", "password", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch (PDOException $e){
    echo "Connection failed:" . $e->getMessage();
}
