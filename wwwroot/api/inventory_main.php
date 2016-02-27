<?php


    require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
    
    $sql = "
            SELECT `inventory_id`,`name` FROM `inventory_main`;
            ";
    $sth = $dbConn->prepare($sql);
    $sth->execute();
    $res = $sth->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($res);