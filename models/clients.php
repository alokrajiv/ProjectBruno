<?php

$sql = "
        INSERT INTO `user_cred` (`username`, `pswrd_hash`, `ROLE`, `modified_time`) 
        VALUES ( ? , ? , ?, NOW());
        ";
$sth = $dbConn->prepare($sql);
try{
    $sth->execute(array( $NEW_USER_DATA['username'], $NEW_USER_DATA['passwd_hash'], $NEW_USER_DATA['role']));
    var_dump($sth);
    header('Location: login.php');
} catch (PDOException $ex) {
    $messg = "FAILURE: REGISTRATION SQL INSERT FAILED";
    logger($messg);
    die($messg);
}

function create_client($data){
    
}

function read_client($data){
    
}

function update_client($data){
    
}

function delete_client($data){
    
}