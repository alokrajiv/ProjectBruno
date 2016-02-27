<?php

require_once __DIR__.'/config.php';

try {
    $dbConn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PSWD);
    
} catch (PDOException $e) {
    //logger("db_Connection!: " . $e->getMessage() . "<br/>");
    die("db error");
}

function setup_db($sqlFilePath){
    logger("setting up db...");
    $sql = file_get_contents($sqlFilePath); //file name should be name of SQL file with .sql extension.
    try {
        $qr = $dbConn->exec($sql);
    }
    catch (PDOException $e){
        logger($e->getMessage());
        die();
    }
}